<template>
   <div
      class="flex flex-column flex sm:flex-column justify-content-between align-items-center h-auto mt-3 p-3 gap-2"
      style="border: 2px solid #1f1f1f; border-radius: 8px"
   >
      <div class="header">
         <h2>RAZONES PARA TRABAJAR CON NOSOTROS</h2>
      </div>
      <div class="flex flex-column sm:flex-row w-full gap-2">
         <div class="flex flex-column sm:flex-row gap-2 w-full">
            <div class="card">
               <div>
                  <h3 class="mt-4">Tecnologías de Vanguardia.</h3>
                  <br />
                  <p>
                     Pila asegura que tus proyectos estén impulsados por
                     tecnologías de vanguardia, garantizando innovación y
                     soluciones a prueba de futuro.
                  </p>
               </div>

               <div
                  class="flex flex-row justify-content-start align-items-center mb-2 w-full"
               >
                  <span class="circle-arrow"
                     ><i class="pi pi-arrow-up-right" style="color: #1f1f1f"></i
                  ></span>
                  <p class="m-0">Conoce más</p>
               </div>
            </div>
            <div class="card">
               <div>
                  <h3 class="mt-4">Adaptabilidad Excepcional.</h3>
                  <br />
                  <p>
                     Pila se adapta rápidamente a los cambios del mercado,
                     asegurando que tus proyectos se mantengan relevantes y
                     competitivos.
                  </p>
               </div>

               <div
                  class="flex flex-row justify-content-start align-items-center mb-2 w-full"
               >
                  <span class="circle-arrow"
                     ><i class="pi pi-arrow-up-right" style="color: #1f1f1f"></i
                  ></span>
                  <p class="m-0">Conoce más</p>
               </div>
            </div>
         </div>
         <div class="flex flex-column sm:flex-row gap-2 w-full">
            <div class="card">
               <div>
                  <h3 class="mt-4">Equipo Experto.</h3>
                  <br />
                  <p>
                     Un equipo altamente cualificado y apasionado trabaja en
                     cada proyecto, aportando una riqueza de conocimientos y
                     habilidades.
                  </p>
               </div>

               <div
                  class="flex flex-row justify-content-start align-items-center mb-2 w-full"
               >
                  <span class="circle-arrow"
                     ><i class="pi pi-arrow-up-right" style="color: #1f1f1f"></i
                  ></span>
                  <p class="m-0">Conoce más</p>
               </div>
            </div>
            <div class="card">
               <div>
                  <h3 class="mt-4">Innovación Constante.</h3>
                  <br />
                  <p>
                     Pila siempre busca nuevas formas de mejorar y evolucionar,
                     asegurando que estés siempre un paso adelante.
                  </p>
               </div>

               <div
                  class="flex flex-row justify-content-start align-items-center mb-2 w-full"
               >
                  <span class="circle-arrow"
                     ><i class="pi pi-arrow-up-right" style="color: #1f1f1f"></i
                  ></span>
                  <p class="m-0">Conoce más</p>
               </div>
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
h3 {
   font-size: 1.5rem;
   margin: 8px;
   font-weight: 500;
}
p {
   color: #b3b3b2;
}
i {
   font-size: 1.5rem;
}
.circle-arrow {
   width: 40px;
   height: 40px;
   background-color: #6b4fbc;
   display: flex;
   justify-content: center;
   align-items: center;
   border-radius: 300px;
   margin-right: 8px;
}
.card {
   height: 300px;
   width: 100%;
   border-radius: 4px;
   background-color: #1a1a1a;
   display: flex;
   flex-direction: column;
   justify-content: space-between;
   align-items: center;
   padding: 16px;
}
@media (max-width: 600px) {
   .card {
      height: 300px;
      width: 100%;
      padding: 10px;
   }
   h2 {
      font-size: 0.8rem;
      font-weight: 600;
   }
   h3 {
      font-size: 1rem;
   }
   p {
      color: #b3b3b2;
      font-size: 0.8rem;
   }
   .circle-arrow {
      width: 30px;
      height: 30px;
      background-color: #6b4fbc;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 300px;
      margin-right: 13px;
   }
   i {
      font-size: 1rem;
   }
}
</style>
