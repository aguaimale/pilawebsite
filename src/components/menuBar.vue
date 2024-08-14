<template>
   <div>
      <Menubar class="navbar">
         <template #start>
            <img src="../assets/brand.png" alt="brand" class="logo" />
            <div class="menu-items">
               <Menubar
                  :model="items"
                  :pt="{
                     rootList: {
                        style: {
                           width: 'fit-content',
                        },
                     },
                  }"
               />
            </div>
         </template>
      </Menubar>
   </div>
</template>

<script setup>
import { ref } from 'vue';
import Menubar from 'primevue/menubar';

const items = ref([
   { label: 'Home' },
   { label: 'Sobre nosotros' },
   { label: 'Servicios' },
   { label: 'Proyectos' },
   { label: 'Contacto' },
]);
</script>

<style scoped>
.navbar {
   position: fixed;
   top: 0px;
   left: 0px;
   width: 100%;
   background-color: #1a1a1a;
   z-index: 1002;
   border-radius: 0px;
}

.logo {
   height: 50px;
}

.menu-items {
   display: flex;
   align-items: center;
}

.menu-items > * {
   background-color: #1a1a1a;
}
</style>
