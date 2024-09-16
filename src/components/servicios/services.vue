<template>
   <div
      class="flex flex-column flex sm:flex-column justify-content-between align-items-center h-auto mt-3 p-3 gap-2"
      style="border: 2px solid #1f1f1f; border-radius: 8px"
   >
      <div class="header">
         <h2>NUESTROS SERVICIOS</h2>
      </div>
      <div class="flex flex-column sm:flex-row w-full gap-2">
         <div
            v-motion-fade-visible-once
            :delay="500"
            :duration="1200"
            class="card"
         >
            <div class="flex flex-row w-full justify-content-between mt-2">
               <div class="flex flex-row align-items-center">
                  <span class="span-cuadrado">
                     <i class="pi pi-palette"></i>
                  </span>
                  <h3>Web Design</h3>
               </div>
            </div>
            <div>
               <p>
                  Nos especializamos en crear sitios web que combinan impacto
                  visual y usabilidad. Cada diseño es pensado para ser atractivo
                  y fácil de navegar, brindando una experiencia memorable que
                  logra conectar con los visitantes y deja una impresión
                  positiva.
               </p>
            </div>
         </div>
         <div
            v-motion-fade-visible-once
            :delay="1000"
            :duration="1200"
            class="card"
         >
            <div class="flex flex-row w-full justify-content-between">
               <div class="flex flex-row align-items-center gap-2">
                  <span class="span-cuadrado">
                     <i class="pi pi-mobile"></i>
                  </span>
                  <h3>Mobile App Development</h3>
               </div>
            </div>
            <div>
               <p>
                  Desarrollamos aplicaciones móviles que destacan por su
                  funcionalidad y diseño. Utilizamos tecnología de vanguardia
                  para crear soluciones que mantienen a los usuarios conectados
                  y comprometidos, brindando una experiencia fluida en todo
                  momento.
               </p>
            </div>
         </div>
      </div>
      <div class="flex flex-column sm:flex-row w-full gap-2">
         <div
            v-motion-fade-visible-once
            :delay="1500"
            :duration="1200"
            class="card"
         >
            <div class="flex flex-row w-full justify-content-between">
               <div class="flex flex-row align-items-center gap-2">
                  <span class="span-cuadrado">
                     <i class="pi pi-code"></i>
                  </span>
                  <h3>Web Development</h3>
               </div>
            </div>
            <div>
               <p>
                  Construimos sitios web que se convierten en verdaderos activos
                  digitales. Aplicamos tecnologías avanzadas y estándares de la
                  industria para garantizar que cada sitio sea eficiente, rápido
                  y optimizado para ofrecer un rendimiento excelente.
               </p>
            </div>
         </div>
         <div
            v-motion-fade-visible-once
            :delay="2000"
            :duration="1200"
            class="card"
         >
            <div class="flex flex-row w-full justify-content-between">
               <div class="flex flex-row align-items-center gap-2">
                  <span class="span-cuadrado">
                     <i class="pi pi-graduation-cap"></i>
                  </span>
                  <h3>Tech Consulting</h3>
               </div>
            </div>
            <div>
               <p>
                  Ofrecemos consultoría tecnológica para mejorar el desempeño de
                  su empresa. A través de soluciones estratégicas, ayudamos a
                  optimizar procesos y operaciones, asegurando que logren sus
                  objetivos de manera efectiva y con el máximo rendimiento.
               </p>
            </div>
         </div>
      </div>
   </div>
</template>

<script setup></script>

<style scoped>
.header {
   width: 100%;
   background-color: #1a1a1a;
   height: 100px;
   border-radius: 4px;
   padding: 24px;
   display: flex;
   flex-direction: row;
   align-items: center;
}
h2 {
   font-size: 2rem;
   font-weight: 700;
}
p {
   color: #b3b3b2;
}
.card {
   height: 310px;
   width: 100%;
   border-radius: 4px;
   background-color: #1a1a1a;
   padding: 32px;
   display: flex;
   flex-direction: column;
   justify-content: space-around;
}
.span-cuadrado {
   border: 1px solid rgb(54, 54, 54);
   border-radius: 10px;
   height: 40px;
   width: 40px;
   display: flex;
   flex-direction: column;
   align-items: center;
   justify-content: center;
}
.span-circulo {
   width: 45px;
   height: 45px;
   border: 1px solid rgb(54, 54, 54);
   display: flex;
   justify-content: center;
   align-items: center;
   border-radius: 300px;
   margin-right: 8px;
}
i {
   color: aquamarine;
   font-size: 1.5rem;
}
h3 {
   font-size: 1.5rem;
   margin: 8px;
   font-weight: 500;
}
@media (max-width: 900px) {
   .card {
      height: 300px;
      width: 100%;
      padding: 12px;
   }
   h2 {
      font-size: 0.9rem;
      font-weight: 700;
   }
   h3 {
      font-size: 1rem;
   }

   p {
      color: #b3b3b2;
      font-size: 15px;
   }
   i {
      color: aquamarine;
      font-size: 0.8rem;
   }
   .span-cuadrado {
      border: 1px solid rgb(54, 54, 54);
      border-radius: 16px;
      height: 40px;
      width: 40px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
   }
   .span-circulo {
      width: 40px;
      height: 40px;
      border: 1px solid rgb(54, 54, 54);
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 300px;
      margin-right: 8px;
   }
}
</style>
