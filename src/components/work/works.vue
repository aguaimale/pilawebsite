<template>
   <div class="header mt-3">
      <h2>NUESTROS PROYECTOS</h2>
   </div>
   <!-- platform -->
   <div
      class="flex flex-column flex sm:flex-column justify-content-between align-items-center h-auto mt-3 p-3 gap-2"
      style="border: 2px solid #1f1f1f; border-radius: 8px"
   >
      <div class="flex flex-column sm:flex-column w-full gap-2">
         <div id="warp" class="flex flex-column sm:flex-row gap-2 w-full">
            <div class="card" style="gap: 10px">
               <div class="flex flex-row w-full justify-content-between">
                  <div class="flex flex-row align-items-center gap-2">
                     <span class="span-cuadrado">
                        <i class="pi pi-graduation-cap"></i>
                     </span>
                     <h3>Platform Evo</h3>
                  </div>
               </div>
               <div>
                  <br />
                  <div>
                     <Chip
                        :style="{
                           backgroundColor: '#27272a',
                           fontSize: '13px',
                        }"
                        label="Categoria: Web Development "
                     />
                  </div>
                  <br />
                  <p class="text-justify">
                     Platform Evo es un avanzado cotizador de seguros
                     multicompañía, diseñado para que intermediarios ofrezcan a
                     sus clientes las mejores coberturas del mercado de forma
                     rápida y precisa. Su tecnología conecta directamente con
                     las principales aseguradoras, ofreciendo una plataforma
                     dinámica que simplifica la gestión, acelera el proceso de
                     selección de pólizas y proporciona una experiencia fluida,
                     adaptable y confiable tanto para los operadores como para
                     los usuarios finales.
                  </p>
               </div>
            </div>
            <div class="card-img">
               <img
                  class="img-soft"
                  src="./assets/Group 83.jpeg"
                  alt="platform"
                  width="100%"
               />
            </div>
            <div class="card-end">
               <div class="frameworks">
                  <div class="flex flex-row w-full justify-content-between">
                     <div
                        class="flex flex-row align-items-center gap-2 mb-3"
                     ></div>
                     <TecnologiasUtilizadas />
                  </div>
               </div>

               <div class="frameworks-dos">
                  <h3>Team</h3>
                  <div class="flex flex-row">
                     <team />
                  </div>
               </div>

               <div>
                  <Button
                     label="Solicitar demo"
                     class="w-full"
                     @click="visible = true"
                  />
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- platform web -->
   <div
      class="flex flex-column flex sm:flex-column justify-content-between align-items-center h-auto mt-3 p-3 gap-2"
      style="border: 2px solid #1f1f1f; border-radius: 8px"
   >
      <div class="flex flex-column sm:flex-column w-full gap-2">
         <div id="warp" class="flex flex-column sm:flex-row gap-2 w-full">
            <div class="card">
               <div class="flex flex-row w-full justify-content-between">
                  <div class="flex flex-row align-items-center gap-2">
                     <span class="span-cuadrado">
                        <i class="pi pi-graduation-cap"></i>
                     </span>
                     <h3>Platform Web</h3>
                  </div>
               </div>
               <div>
                  <br />
                  <div>
                     <Chip
                        :style="{
                           backgroundColor: '#27272a',
                           fontSize: '13px',
                        }"
                        label="Categoria: Web Development "
                     />
                  </div>
                  <br />
               </div>
               <div>
                  <p class="text-justify">
                     Nuestro cotizador de seguros está diseñado para transformar
                     la venta de pólizas en línea, permitiendo a los clientes
                     finales elegir las mejores coberturas desde cualquier
                     dispositivo móvil. <br />Con una interfaz mobile-first,
                     esta plataforma garantiza una navegación ágil y sin
                     interrupciones, ideal para empresas que desean integrar la
                     venta de seguros directamente en sus sitios web.<br />
                     Además, es completamente personalizable para adaptarse al
                     look and feel de la marca, ofreciendo una experiencia
                     coherente y de confianza.
                  </p>
               </div>
            </div>
            <div class="card-img">
               <img
                  class="img-soft"
                  src="./assets/platformweb.jpeg"
                  alt="platform"
                  width="100%"
               />
            </div>
            <div class="card-end">
               <div class="frameworks">
                  <div class="flex flex-row w-full justify-content-between">
                     <div
                        class="flex flex-row align-items-center gap-2 mb-3"
                     ></div>
                     <TecnologiasUtilizadas />
                  </div>
               </div>

               <div class="frameworks-dos">
                  <h3>Team</h3>
                  <div class="flex flex-row">
                     <team />
                  </div>
               </div>
               <div>
                  <Button
                     label="Solicitar demo"
                     class="w-full"
                     @click="visible = true"
                  />
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- multiagro -->
   <div
      class="flex flex-column flex sm:flex-column justify-content-between align-items-center h-auto mt-3 p-3 gap-2"
      style="border: 2px solid #1f1f1f; border-radius: 8px"
   >
      <div class="flex flex-column sm:flex-column w-full gap-2">
         <div id="warp" class="flex flex-column sm:flex-row gap-2 w-full">
            <div class="card">
               <div class="flex flex-row w-full justify-content-between">
                  <div class="flex flex-row align-items-center gap-2">
                     <span class="span-cuadrado">
                        <i class="pi pi-graduation-cap"></i>
                     </span>
                     <h3>Multi Agro</h3>
                  </div>
               </div>
               <div>
                  <br />
                  <div>
                     <Chip
                        :style="{
                           backgroundColor: '#27272a',
                           fontSize: '13px',
                        }"
                        label="Categoria: Web Development "
                     />
                  </div>
                  <br />
               </div>
               <div>
                  <p class="text-justify">
                     Multi Agro es la solución definitiva para la
                     comercialización de seguros agrícolas, especialmente
                     diseñada para brindar cobertura frente a riesgos como el
                     granizo, adaptable a otros eventos. <br />
                     Esta plataforma conecta a los productores con las
                     principales aseguradoras, facilitando una toma de
                     decisiones rápida y eficiente al permitir la comparación de
                     cotizaciones entre compañías en línea. Su sistema unificado
                     no solo optimiza los tiempos de gestión, sino que permite
                     ofrecer soluciones personalizadas para proteger los
                     cultivos de tus clientes con total transparencia y
                     facilidad de uso.
                  </p>
               </div>
            </div>
            <div class="card-img">
               <img
                  class="img-soft"
                  src="./assets/Group 81.jpeg"
                  alt="platform"
                  width="100%"
               />
            </div>
            <div class="card-end">
               <div class="frameworks">
                  <div class="flex flex-row w-full justify-content-between">
                     <div
                        class="flex flex-row align-items-center gap-2 mb-3"
                     ></div>
                     <TecnologiasUtilizadas />
                  </div>
               </div>

               <div class="frameworks-dos">
                  <h3>Team</h3>
                  <div class="flex flex-row">
                     <team />
                  </div>
               </div>
               <div>
                  <Button
                     label="Solicitar demo"
                     class="w-full"
                     @click="visible = true"
                  />
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- cotiza plus -->
   <div
      class="flex flex-column flex sm:flex-column justify-content-between align-items-center h-auto mt-3 p-3 gap-2"
      style="border: 2px solid #1f1f1f; border-radius: 8px"
   >
      <div class="flex flex-column sm:flex-column w-full gap-2">
         <div id="warp" class="flex flex-column sm:flex-row gap-2 w-full">
            <div class="card">
               <div class="flex flex-row w-full justify-content-between">
                  <div class="flex flex-row align-items-center gap-2">
                     <span class="span-cuadrado">
                        <i class="pi pi-graduation-cap"></i>
                     </span>
                     <h3>Cotiza Plus</h3>
                  </div>
               </div>
               <div>
                  <br />
                  <div>
                     <Chip
                        :style="{
                           backgroundColor: '#27272a',
                           fontSize: '13px',
                        }"
                        label="Categoria: Web Development "
                     />
                  </div>
                  <br />
               </div>
               <div>
                  <p class="text-justify">
                     Nuestro cotizador de seguros vehiculares ofrece una
                     solución innovadora para consumidores finales, brindando la
                     posibilidad de comparar en tiempo real las mejores
                     coberturas y precios de las principales aseguradoras.
                     <br />Con solo unos pocos datos, los usuarios pueden
                     generar cotizaciones personalizadas y visualizar las
                     opciones disponibles de manera inmediata. Su plataforma
                     intuitiva y diseñada para maximizar la eficiencia garantiza
                     que cada cliente encuentre la oferta ideal para sus
                     necesidades, transformando la cotización en un proceso
                     rápido, claro y altamente efectivo.
                  </p>
               </div>
            </div>
            <div class="card-img">
               <img
                  class="img-soft"
                  src="./assets/cotizaplus.jpeg"
                  alt="platform"
               />
            </div>
            <div class="card-end">
               <div class="frameworks">
                  <div class="flex flex-row w-full justify-content-between">
                     <div
                        class="flex flex-row align-items-center gap-2 mb-3"
                     ></div>
                     <TecnologiasUtilizadas />
                  </div>
               </div>

               <div class="frameworks-dos">
                  <h3>Team</h3>
                  <div class="flex flex-row">
                     <team />
                  </div>
               </div>
               <div>
                  <Button
                     label="Solicitar demo"
                     class="w-full"
                     @click="visible = true"
                  />
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- dialog -->
   <div>
      <Dialog
         v-model:visible="visible"
         modal
         header="Solicitud de producto"
         :style="{
            width: 'auto',
            backgroundColor: ' #1a1a1a',
            border: ' #1a1a1a',
         }"
      >
         <span class="p-text-secondary block mb-5"
            >Para avanzar, por favor complete los siguientes campos.</span
         >
         <div><formDemo /></div>
      </Dialog>
   </div>
</template>

<script setup>
import { ref } from 'vue';
import formDemo from './components/formDemo.vue';
import TecnologiasUtilizadas from './components/tecnologiasUtilizadas.vue';
import team from './components/team.vue';

const visible = ref(false);
</script>

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
.card {
   height: auto;
   width: 100%;
   border-radius: 4px;
   background-color: #1a1a1a;
   padding: 24px;
   display: flex;
   flex-direction: column;
   justify-content: space-around;
}
.card-img {
   height: auto;
   width: 100%;
   border-radius: 4px;
   background-color: #1a1a1a;
   display: flex;
   flex-direction: column;
   justify-content: center;
}

.card-end {
   height: auto;
   width: 100%;
   border-radius: 4px;
   display: flex;
   flex-direction: column;
   justify-content: space-between;
}
.frameworks {
   height: 240px;
   width: 100%;
   background-color: #1a1a1a;
   border-radius: 4px;
   padding: 24px;
}
.frameworks-dos {
   height: auto;
   width: 100%;
   background-color: #1a1a1a;
   border-radius: 4px;
   padding: 24px;
   display: flex;
   flex-direction: row;
   justify-content: space-between;
   align-items: center;
}
.span-cuadrado {
   border: 1px solid rgb(54, 54, 54);
   border-radius: 16px;
   height: 45px;
   width: 45px;
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
}

p {
   color: #b3b3b2;
   font-size: 15px;
   margin: 0px;
}

.img-soft {
   border-radius: 2px;
   width: 100%;
   height: 100%;
   object-fit: cover;
}

h3 {
   font-size: 1.5rem;
   margin: 8px;
   font-weight: 500;
}

#warp {
   display: flex;
   flex-direction: row;
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
   .img-soft {
      object-fit: cover;
   }
   .card-img {
      height: auto;
      width: 140%;
   }
   .frameworks {
      height: 66%;
   }
   .frameworks-dos {
      height: 7opx;
   }
}
@media (min-width: 1280px) {
   p {
      color: #b3b3b2;
      font-size: 16px;
   }
   .frameworks {
      height: 70%;
   }
}
@media (max-width: 1024px) {
   #warp {
      display: flex;
      flex-direction: column !important;
   }
   .card {
      height: auto;
      width: 100%;
   }
   .frameworks {
      height: auto;
      width: 100%;
      background-color: #1a1a1a;
      border-radius: 4px;
      padding: 24px;
   }
   i {
      color: aquamarine;
      font-size: 1rem;
   }
   h2 {
      font-size: 1rem;
      font-weight: 600;
   }
   h3 {
      font-size: 1rem;
   }
   .card-img {
      height: auto;
      width: auto;
      border-radius: 4px;
      background-color: #1a1a1a;
      display: flex;
      flex-direction: column;
   }

   .card-end {
      height: auto;
      width: 100%;
      border-radius: 4px;
      display: flex;
      flex-direction: column;
      gap: 10px;
   }

   .frameworks-dos {
      height: auto;
      width: 100%;
      background-color: #1a1a1a;
      border-radius: 4px;
      padding: 24px;
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
   }
   .span-cuadrado {
      border: 1px solid rgb(54, 54, 54);
      border-radius: 16px;
      height: 45px;
      width: 45px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
   }

   i {
      color: aquamarine;
      font-size: 1rem;
   }
   p {
      color: #b3b3b2;
      font-size: 15px;
   }

   .img-soft {
      height: 100%;
      border-radius: 2px;
   }
   span {
      font-size: 0.7rem;
   }
}
</style>
