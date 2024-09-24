<template>
   <div
      class="flex flex-column flex sm:flex-column justify-content-between align-items-center h-auto mt-3 p-3 gap-2"
      style="border: 2px solid #1f1f1f; border-radius: 8px"
   >
      <div class="flex flex-column sm:flex-row w-full gap-2">
         <div class="flex sm:flex-row w-full">
            <div class="card-links">
               <div class="flex flex-column">
                  <h4>Sitio</h4>
                  <p class="terminos" @click="scrollToSection('home')">Home</p>
                  <p class="terminos" @click="scrollToSection('nosotros')">
                     Nosotros
                  </p>
                  <p class="terminos" @click="scrollToSection('servicios')">
                     Servicios
                  </p>
                  <p class="terminos" @click="scrollToSection('proyectos')">
                     Proyectos
                  </p>
               </div>
               <div class="flex flex-column">
                  <h4>Servicios</h4>
                  <p>Web Dev</p>
                  <p>Web Design</p>
                  <p>Mobile Dev</p>
                  <p>Consulting</p>
               </div>
               <div class="flex flex-column">
                  <h4>Proyectos</h4>
                  <p>Platform Evo</p>
                  <p>Platform Web</p>
                  <p>Multi Agro</p>
                  <p>Cotiza Plus</p>
               </div>
            </div>
         </div>
         <!-- SUBIR CV -->
         <div class="flex flex-column sm:flex-column w-full gap-2">
            <div class="card-newsletter">
               <div>
                  <h3>Sumate a Nuestro Equipo</h3>
                  <div style="margin-left: 10px">
                     <p>
                        Si eres una persona innovadora, con ganas de enfrentar
                        nuevos desafíos y contribuir al éxito de proyectos
                        emocionantes ¡te queremos con nosotros!.
                     </p>
                     <p>
                        Envíanos tu C.V. a
                        <a
                           href="mailto:info@pilait.com.ar"
                           class="text-primary font-bold"
                           >info@pilait.com.ar</a
                        >
                     </p>
                  </div>
                  <IconRow />
               </div>
            </div>
            <div class="card-footer">
               <div class="flex flex-row gap-3">
                  <p @click="visible = true" class="terminos">
                     Terms & Conditions
                  </p>
                  <p>Privacy Policy</p>
               </div>
               <p style="border-bottom: 1px solid #d9d9d9">
                  © 2024 PILA IT. All rights reserved.
               </p>
            </div>
         </div>
      </div>
      <div class="flex flex-column sm:flex-row w-full gap-2"></div>
   </div>
   <div>
      <Dialog
         v-model:visible="visible"
         modal
         header="Terminos y condiciones"
         :style="{
            width: '50rem',
            backgroundColor: '#1a1a1a',
            border: '#1a1a1a',
         }"
      >
         <div>
            <terminosCondiciones />
         </div>
      </Dialog>
   </div>
</template>

<script setup>
import { ref } from 'vue';
import terminosCondiciones from './components/terminosCondiciones.vue';
import IconRow from './components/iconRow.vue';

const visible = ref(false);

const scrollToSection = (sectionId) => {
   const section = document.getElementById(sectionId);
   if (section) {
      const navbarHeight = document.querySelector('.navbar')?.offsetHeight || 0;
      const sectionPosition = section.offsetTop - navbarHeight;

      window.scrollTo({
         top: sectionPosition,
         behavior: 'smooth',
      });
   }
};
</script>
<style scoped>
.card {
   height: 400px;
   width: 100%;
   border-radius: 4px;
   background-color: #1a1a1a;
   padding: 24px;
}
.card-links {
   height: 400px;
   width: 100%;
   border-radius: 4px;
   background-color: #1a1a1a;
   padding: 20px;
   display: flex;
   flex-direction: row;
   align-items: center;
   justify-content: space-around;
}
.card-newsletter {
   height: 240px;
   width: 100%;
   border-radius: 4px;
   background-color: #1a1a1a;
   padding: 24px;
}
.card-footer {
   height: 150px;
   width: 100%;
   border-radius: 4px;
   background-color: #1a1a1a;
   padding: 24px;
   display: flex;
   flex-direction: row;
   justify-content: space-between;
   align-items: center;
}
#newsletter {
   background-color: #000000;
   border: #1a1a1a;
}

p {
   color: #b3b3b2;
   font-size: 15px;
}
h3 {
   font-size: 1.5rem;
   margin: 8px;
   font-weight: 500;
}
.terminos {
   display: inline-block;
   transition: transform 0.3s ease;
}

.terminos:hover {
   color: aliceblue;
   cursor: pointer;
   transform: scale(1.1);
}
@media (min-width: 1025px) {
   h2 {
      font-size: 1.5rem;
      font-weight: 700;
   }
   p {
      font-size: 13px;
   }
   h3 {
      font-size: 1.2rem;
      margin: 8px;
      font-weight: 500;
   }
}
@media (max-width: 900px) {
   .card {
      height: 220px;
      width: 100%;
      padding: 12px;
   }
   h2 {
      font-size: 0.9rem;
      font-weight: 700;
   }
   h3 {
      font-size: 13px;
   }
   p {
      color: #b3b3b2;
      font-size: 0.8rem;
   }

   .card-links {
      height: 300px;
      width: 100%;
      border-radius: 4px;
      background-color: #1a1a1a;
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: space-between;
   }
   .card-newsletter {
      height: 240px;
   }
   .card-footer {
      height: 100px;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 12px;
   }
}
@media (min-width: 1280px) {
   p {
      color: #b3b3b2;
      font-size: 16px;
   }
}
</style>
