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
                           width: 'auto',
                           padding: '8px',
                        },
                     },
                     items: {
                        style: {
                           width: 'auto',
                           padding: '8px',
                           border: '1px solid red',
                        },
                     },
                  }"
               >
                  <template #item="{ item, props }">
                     <a
                        :class="{ active: activeSection === item.label }"
                        class="flex align-items-center mr-2"
                        v-bind="props"
                        @click="scrollToSection(item.label)"
                        aria-label="Navegar a {{ item.label }}"
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
import { ref, onMounted, onBeforeUnmount } from 'vue';
import Menubar from 'primevue/menubar';

const activeSection = ref(null);

const items = ref([
   { label: 'Home' },
   { label: 'Nosotros' },
   { label: 'Servicios' },
   { label: 'Proyectos' },
   { label: 'Contacto' },
]);

const scrollToSection = (sectionId) => {
   const section = document.getElementById(
      sectionId.toLowerCase().replace(/\s+/g, '')
   );
   if (section) {
      const navbarHeight = document.querySelector('.navbar').offsetHeight || 50;
      const sectionPosition = section.offsetTop - navbarHeight;

      window.scrollTo({
         top: sectionPosition,
         behavior: 'smooth',
      });

      activeSection.value = sectionId;
   }
};

const updateActiveSectionOnScroll = () => {
   const sections = items.value.map((item) =>
      document.getElementById(item.label.toLowerCase().replace(/\s+/g, ''))
   );
   const navbarHeight = document.querySelector('.navbar').offsetHeight || 50;

   sections.forEach((section) => {
      if (section) {
         const sectionTop = section.offsetTop - navbarHeight;
         const sectionBottom = sectionTop + section.offsetHeight;

         if (window.scrollY >= sectionTop && window.scrollY < sectionBottom) {
            activeSection.value =
               section.id.charAt(0).toUpperCase() + section.id.slice(1);
         }
      }
   });
};

onMounted(() => {
   const hash = window.location.hash.replace('#', '');
   if (hash) {
      scrollToSection(hash);
   }

   window.addEventListener('scroll', updateActiveSectionOnScroll);
});

onBeforeUnmount(() => {
   window.removeEventListener('scroll', updateActiveSectionOnScroll);
});
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

.menu-items a:hover {
   background-color: #1a1a1a;
   display: flex;

   width: 100%;
}

.menu-items > * {
   background-color: #1a1a1a;
}

.menu-items a.active {
   display: flex;
   justify-content: center;
   align-items: center;
   font-weight: 700;
   padding: 3px;
   color: #65dcbe;
   width: 100%;
   border-radius: 2px;
}

.menu-items a {
   color: #65dcbe;
}

/* Ajustes responsivos */
@media (max-width: 768px) {
   .logo {
      height: 40px;
   }

   .menu-items {
      flex-direction: column;
      align-items: flex-start;
   }
}
</style>
