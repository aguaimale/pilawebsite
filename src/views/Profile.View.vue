<template>
   <div class="profile-container">
      <div class="conteiner">
         <router-view />
      </div>
   </div>
</template>

<script setup></script>

<style scoped>
.profile-container {
   display: flex;
   flex-direction: column;
   justify-content: center;
   align-items: center;
   height: 100vh;
}
.conteiner {
   display: flex;
   flex-direction: column;
   height: fit-content;
}
</style>
