<template>
   <form class="formulario" action="SolicitarDemo.php" method="post">
      <div class="flex flex-column gap-2">
         <label for="producto">Producto solicitado</label>
         <select
            id="producto"
            name="producto"
            v-model="producto"
            class="p-inputtext p-component"
            required
         >
            <option value="" disabled selected>Selecciona un producto</option>
            <option value="Platform Evo">Platform Evo</option>
            <option value="Platform Web">Platform Web</option>
            <option value="Multi Agro">Multi Agro</option>
            <option value="Cotiza Plus">Cotiza Plus</option>
         </select>
      </div>
      <div class="flex flex-column gap-2">
         <label for="email">Email</label>
         <InputText
            id="email"
            name="email"
            placeholder="Ingresa tu correo electrónico"
            v-model="email"
            size="large"
            required
         />
      </div>
      <div class="flex flex-column gap-2">
         <label for="empresa">Empresa</label>
         <InputText
            id="empresa"
            name="empresa"
            placeholder="Ingresa el nombre de tu empresa"
            v-model="empresa"
            size="large"
            required
         />
      </div>
      <Button type="submit" severity="primary">Solicitar Demo</Button>
   </form>
</template>

<script setup>
import { ref } from 'vue';

const email = ref('');
const empresa = ref('');
const producto = ref('');
</script>

<style scoped>
.formulario {
   padding: 18px;
   display: flex;
   flex-direction: column;
   justify-content: center;
   gap: 18px;
   width: 100%;
   background-color: #1a1a1a;
}
#email,
#empresa,
#producto {
   background-color: black;
   color: white;
   border: none;
}
label {
   font-weight: 700;
}
select {
   background-color: black;
   color: white;
   border: none;
   padding: 10px;
   border-radius: 4px;
}
</style>
