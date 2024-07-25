<template>
   <div>
      <Menubar class="" style="background-color: #1a1a1a">
         <template #start>
            <img src="../assets/brand.png" alt="brand" class="logo" />
         </template>
         <template #end>
            <div class="menu-items">
               <Menubar :model="items" />
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
   { label: 'Features' },
   {
      label: 'Projects',
      items: [
         { label: 'Components' },
         { label: 'Blocks' },
         { label: 'UI Kit' },
         {
            label: 'Templates',
            items: [{ label: 'Apollo' }, { label: 'Ultima' }],
         },
      ],
   },
   { label: 'Contact' },
]);
</script>

<style scoped>
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
