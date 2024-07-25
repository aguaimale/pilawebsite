<template>
   <div class="formulario">
      <div class="flex flex-column gap-2">
         <label for="username">NOMBRE</label>
         <InputText
            id="username"
            placeholder="Ingresa tu nombre"
            v-model="value"
            size="large"
         />
      </div>
      <div class="flex flex-column gap-2">
         <label for="email">EMAIL</label>
         <InputText
            id="email"
            placeholder="Ingresa tu correo"
            v-model="value"
            size="large"
         />
      </div>
      <div class="flex flex-column gap-2">
         <label for="tupregunta">TU CONSULTA</label>
         <Textarea
            id="textarea"
            placeholder="Ingresa tu consulta..."
            v-model="value"
            rows="5"
            cols="30"
         />
      </div>
      <Button severity="primary">Enviar Consulta</Button>
   </div>
</template>
<script setup></script>
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
