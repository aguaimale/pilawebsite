<template>
   <div
      class="flex flex-column flex sm:flex-column justify-content-between align-items-center h-auto mt-3 p-3 gap-2"
      style="border: 2px solid #1f1f1f; border-radius: 8px"
   >
      <div class="header">
         <h2>RAZONES PARA TRABAJAR JUNTOS</h2>
      </div>
      <div class="flex flex-column sm:flex-column w-full gap-2">
         <div class="flex flex-column sm:flex-row gap-2 w-full">
            <div v-motion-fade-visible-once :delay="500" class="card">
               <div class="container">
                  <h3 class="mt-4">
                     Tecnologías de <br />
                     <span class="span"> Vanguardia.</span>
                  </h3>
                  <br />
                  <p>
                     Elaboramos proyectos impulsados por ciencia aplicada y
                     herramientas tecnológicas diferenciales garantizando
                     innovación y soluciones a prueba de futuro.
                  </p>
               </div>
            </div>
            <div v-motion-fade-visible-once :delay="1000" class="card">
               <div class="container">
                  <h3 class="mt-4">
                     Adaptabilidad <br />

                     <span class="span">Excepcional.</span>
                  </h3>
                  <br />
                  <p>
                     Adaptación a los cambios constantes del mercado y agilidad,
                     concretamos proyectos que se mantengan relevantes y
                     competitivos.
                  </p>
               </div>
            </div>
         </div>
         <div class="flex flex-column sm:flex-row gap-2 w-full">
            <div v-motion-fade-visible-once :delay="1500" class="card">
               <div class="container">
                  <h3 class="mt-4">
                     Innovación <br />
                     <span class="span"> Continua.</span>
                  </h3>
                  <br />
                  <p>
                     Buscamos nuevas formas de evolucionar, asegurando que su
                     empresa y proyecto estén siempre un paso adelante.
                  </p>
               </div>
            </div>
            <div v-motion-fade-visible-once :delay="2000" class="card">
               <div class="container">
                  <h3 class="mt-4">
                     Equipo <br />

                     <span class="span"> Experto.</span>
                  </h3>
                  <br />
                  <p>
                     Altamente calificados y apasionados, que aportan riqueza de
                     conocimientos y habilidades, para brindar una colaboración
                     efectiva y de calidad.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</template>

<script setup></script>

<style scoped>
.span {
   font-weight: 700;
   font-size: 2rem;
}
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
.card {
   height: auto;
   width: 80%;
   border-radius: 4px;
   background-color: #1a1a1a;
   display: flex;
   flex-direction: column;
   justify-content: space-around;
   align-items: center;
   padding: 32px;
}
.container {
   height: 80%;
   justify-content: space-between;
   display: flex;
   flex-direction: column;
}

@media (max-width: 900px) {
   .text-justify {
      text-align: justify;
      text-align-last: left;
      word-spacing: -0.2em;
      letter-spacing: 0.01em;
   }
   .card {
      height: 230px;
      width: 100%;
      padding: 10px;
   }
   h2 {
      font-size: 1rem;
      font-weight: 600;
   }
   h3 {
      font-size: 1rem;
      font-weight: 600;
   }
   p {
      color: #b3b3b2;
      font-size: 15px;
   }
   .container {
      height: 100%;
      justify-content: space-between;
      display: flex;
      flex-direction: column;
   }
   .span {
      font-size: 1.5rem;
   }
}
</style>
