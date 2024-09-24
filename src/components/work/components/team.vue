<template>
   <div class="avatar-container">
      <img class="avatar" src="../assets/agustin.png" alt="colaborador" />
      <img class="avatar" src="../assets/dario.png" alt="colaborador" />
      <img class="avatar" src="../assets/diego.png" alt="colaborador" />
      <img class="avatar" src="../assets/ezequiel.png" alt="colaborador" />
      <img class="avatar" src="../assets/guillermo.png" alt="colaborador" />
      <img class="avatar" src="../assets/josefina.png" alt="colaborador" />
      <img class="avatar" src="../assets/leito.jpg" alt="colaborador" />
      <img class="avatar" src="../assets/mari.png" alt="colaborador" />
      <img class="avatar" src="../assets/mauro.jpg" alt="colaborador" />
      <img class="avatar" src="../assets/matias.png" alt="colaborador" />
      <img class="avatar" src="../assets/melody.png" alt="colaborador" />
      <img class="avatar" src="../assets/nacho.jpg" alt="colaborador" />
   </div>
</template>

<script setup></script>

<style scoped>
.avatar-container {
   display: flex;
   align-items: center;
   position: relative;
}

.avatar {
   height: 25px;
   width: 25px;
   border-radius: 50%;
   object-fit: cover;
   position: relative;
   margin-left: -10px;
   z-index: 1;
   transition: transform 0.3s ease;
   cursor: pointer;
}

.avatar:first-child {
   margin-left: 0;
}

.avatar:hover {
   transform: scale(2.2);
   z-index: 2;
}

.extra {
   display: flex;
   align-items: center;
   justify-content: center;
   color: white;
   height: 40px;
   width: 40px;
   border-radius: 50%;
   background-color: #333;
   margin-left: -10px;
   font-size: 14px;
   z-index: 0;
}
</style>
