<template>
   <form class="formulario" action="procesar_contacto_red.php" method="post">
      <div class="flex flex-column gap-2">
         <label for="username">Nombre</label>
         <InputText
            id="username"
            name="nombre"
            placeholder="Ingresa tu nombre"
            v-model="nombre"
            size="large"
         />
      </div>
      <div class="flex flex-column gap-2">
         <label for="email">Email</label>
         <InputText
            id="email"
            name="email"
            placeholder="Ingresa tu correo"
            v-model="email"
            size="large"
         />
      </div>
      <div class="flex flex-column gap-2">
         <label for="tupregunta">Consulta</label>
         <Textarea
            id="textarea"
            name="consulta"
            placeholder="Ingresa tu consulta..."
            v-model="consulta"
            rows="5"
            cols="30"
         />
      </div>
      <Button type="submit" severity="primary">Enviar mensaje</Button>
   </form>
</template>

<script setup>
import { ref } from 'vue';

const nombre = ref('');
const email = ref('');
const consulta = ref('');
</script>

<style scoped>
.formulario {
   padding: 18px;
   display: flex;
   flex-direction: column;
   justify-content: center;
   gap: 18px;
   width: 100%;
}
#username,
#textarea,
#email {
   background-color: black;
   color: white;
   border: none;
}
label {
   font-weight: 700;
}
</style>
