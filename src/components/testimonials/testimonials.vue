<template>
   <div
      class="flex flex-column flex sm:flex-column justify-content-between align-items-center h-auto mt-3 p-3 gap-2"
      style="border: 2px solid #1f1f1f; border-radius: 8px"
   >
      <div class="header">
         <h2>TESTIMONIOS</h2>
      </div>
      <div class="flex flex-column sm:flex-row w-full gap-2">
         <div class="flex flex-column sm:flex-row gap-2 w-full">
            <div class="card">
               <div>
                  <h3 class="mt-4">Innovación en Cada Proyecto.</h3>
                  <br />
                  <p>
                     Pila garantiza que cada proyecto esté marcado por la
                     innovación y soluciones efectivas, asegurando un futuro
                     prometedor.
                  </p>
               </div>

               <div
                  class="flex flex-row align-items-center w-full gap-3 p-3"
                  style="background-color: #2c2c2c; border-radius: 4px"
               >
                  <div class="flex flex-row w-full justify-content-start gap-4">
                     <Avatar
                        image="https://primefaces.org/cdn/primevue/images/avatar/asiyajavayant.png"
                        size="medium"
                        shape="circle"
                     />
                     <div class="flex flex-row gap-3">
                        <b><p>Mariana Lopez</p></b>
                        <p>COO of FutureTech</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card">
               <div>
                  <h3 class="mt-4">Soluciones Personalizadas.</h3>
                  <br />
                  <p>
                     Con Pila, cada solución es personalizada, asegurando que se
                     adapte perfectamente a las necesidades de nuestros
                     clientes.
                  </p>
               </div>

               <div
                  class="flex flex-row justify-content-start align-items-center w-full"
               >
                  <div
                     class="flex flex-row justify-content-start align-items-center w-full gap-4 p-3"
                     style="background-color: #2c2c2c; border-radius: 4px"
                  >
                     <div
                        class="flex flex-row w-full justify-content-start gap-4"
                     >
                        <Avatar
                           image="https://primefaces.org/cdn/primevue/images/avatar/amyelsner.png"
                           size="medium"
                           shape="circle"
                        />
                        <div class="flex flex-row gap-3">
                           <b><p>Javier Gómez</p></b>
                           <p>CTO of Innovatech</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="flex flex-column sm:flex-row gap-2 w-full">
            <div class="card">
               <div>
                  <h3 class="mt-4">Tecnología de Calidad.</h3>
                  <br />
                  <p>
                     Pila nos ha proporcionado tecnologías de alta calidad,
                     permitiéndonos mantenernos a la vanguardia en nuestro
                     sector.
                  </p>
               </div>

               <div
                  class="flex flex-row justify-content-start align-items-center w-full"
               >
                  <div
                     class="flex flex-row justify-content-start align-items-center w-full gap-4 p-3"
                     style="background-color: #2c2c2c; border-radius: 4px"
                  >
                     <div
                        class="flex flex-row w-full justify-content-start gap-4"
                     >
                        <Avatar
                           image="https://primefaces.org/cdn/primevue/images/avatar/onyamalimba.png"
                           size="medium"
                           shape="circle"
                        />
                        <div class="flex flex-row gap-3">
                           <b><p>Luisa Fernández</p></b>
                           <p>Smart Solutions</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card">
               <div>
                  <h3 class="mt-4">Resultados Garantizados.</h3>
                  <br />
                  <p>
                     Trabajar con Pila ha sido una garantía de éxito, gracias a
                     su enfoque en soluciones tecnológicas avanzadas.
                  </p>
               </div>

               <div
                  class="flex flex-row justify-content-start align-items-center w-full"
               >
                  <div
                     class="flex flex-row justify-content-start align-items-center w-full gap-4 p-3"
                     style="background-color: #2c2c2c; border-radius: 4px"
                  >
                     <div
                        class="flex flex-row w-full justify-content-start gap-4"
                     >
                        <Avatar
                           image="https://primefaces.org/cdn/primevue/images/avatar/xuxuefeng.png"
                           size="medium"
                           shape="circle"
                        />
                        <div class="flex flex-row gap-3">
                           <b><p>Carlos Martínez</p></b>
                           <p>PM at TechWave</p>
                        </div>
                     </div>
                  </div>
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
@media (max-width: 900px) {
   .card {
      height: 300px;
      width: 100%;
      padding: 10px;
   }
   h2 {
      font-size: 1.2rem;
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
