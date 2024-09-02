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
               >
                  <template #item="{ item, props }">
                     <a
                        :class="{ active: activeSection === item.label }"
                        class="flex align-items-center"
                        v-bind="props"
                        @click="scrollToSection(item.label)"
                     >
                        <span>{{ item.label }}</span>
                     </a>
                  </template>
               </Menubar>
            </div>
         </template>
      </Menubar>
   </div>
</template>

<script setup>
import { ref } from 'vue';
import Menubar from 'primevue/menubar';

const activeSection = ref(null);

const items = ref([
   { label: 'Home' },
   { label: 'Sobre nosotros' },
   { label: 'Servicios' },
   { label: 'Proyectos' },
   { label: 'Contacto' },
]);

const scrollToSection = (sectionId) => {
   console.log('click');
   const section = document.getElementById(
      sectionId.toLowerCase().replace(/\s+/g, '')
   );
   if (section) {
      section.scrollIntoView({ behavior: 'smooth' });
      activeSection.value = sectionId;
   }
};
</script>

<style scoped>
.navbar {
   position: fixed;
   top: 0;
   left: 0;
   width: 100%;
   background-color: #1a1a1a;
   border-radius: 0px;
   z-index: 1002;
}

.logo {
   height: 50px;
}

.menu-items {
   display: flex;
   align-items: center;
   cursor: pointer;
}

.menu-items > * {
   background-color: #1a1a1a;
}

.menu-items a.active {
   font-weight: 500;
   color: #ffffff;
}
</style>
