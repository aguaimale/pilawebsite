<template>
   <div
      class="flex flex-column flex sm:flex-column justify-content-between align-items-center h-auto mt-3 p-3 gap-2"
      style="border: 2px solid #1f1f1f; border-radius: 8px"
   >
      <div class="header">
         <h2>NUESTROS SERVICIOS</h2>
      </div>
      <div class="flex flex-column sm:flex-row w-full gap-2">
         <div class="card">
            <div class="flex flex-row w-full justify-content-between mt-2">
               <div class="flex flex-row align-items-center gap-2">
                  <span class="span-cuadrado">
                     <i class="pi pi-palette"></i>
                  </span>
                  <h3>Web Design</h3>
               </div>
               <div id="ocultar" class="flex flex-row align-items-center gap-2">
                  <span class="span-circulo">
                     <i class="pi pi-arrow-up-right" style="color: white"></i>
                  </span>
                  <p>Más Información</p>
               </div>
            </div>
            <div>
               <p>
                  Nuestro servicio de diseño web se enfoca en la creación de
                  sitios web visualmente impactantes y altamente intuitivos. Nos
                  aseguramos de que cada página no solo sea estéticamente
                  atractiva, sino también fácil de navegar, proporcionando una
                  experiencia de usuario excepcional que deja una impresión
                  duradera en sus visitantes.
               </p>
            </div>
            <div class="flex w-full justify-content-end">
               <h3>Starts From $1,500</h3>
            </div>
         </div>
         <div class="card">
            <div class="flex flex-row w-full justify-content-between">
               <div class="flex flex-row align-items-center gap-2">
                  <span class="span-cuadrado">
                     <i class="pi pi-mobile"></i>
                  </span>
                  <h3>Mobile App Development</h3>
               </div>
               <div class="flex flex-row align-items-center gap-2">
                  <span class="span-circulo">
                     <i class="pi pi-arrow-up-right" style="color: white"></i>
                  </span>
                  <p>Más Información</p>
               </div>
            </div>
            <div>
               <p>
                  Con nuestro servicio de desarrollo de aplicaciones móviles,
                  aprovechamos el poder de la tecnología móvil para crear
                  aplicaciones de vanguardia que mantienen a sus clientes
                  comprometidos en todo momento.
               </p>
            </div>
            <div class="flex w-full justify-content-end">
               <h3>Starts From $1,500</h3>
            </div>
         </div>
      </div>
      <div class="flex flex-column sm:flex-row w-full gap-2">
         <div class="card">
            <div class="flex flex-row w-full justify-content-between">
               <div class="flex flex-row align-items-center gap-2">
                  <span class="span-cuadrado">
                     <i class="pi pi-code"></i>
                  </span>
                  <h3>Web Development</h3>
               </div>
               <div class="flex flex-row align-items-center gap-2">
                  <span class="span-circulo">
                     <i class="pi pi-arrow-up-right" style="color: white"></i>
                  </span>
                  <p>Más Información</p>
               </div>
            </div>
            <div>
               <p>
                  Nuestro servicio de desarrollo web se centra en convertir su
                  sitio web en un poderoso activo digital. Utilizamos las
                  tecnologías más avanzadas y las mejores prácticas de la
                  industria para construir sitios web de alta calidad.
               </p>
            </div>
            <div class="flex w-full justify-content-end">
               <h3>Starts From $1,500</h3>
            </div>
         </div>
         <div class="card">
            <div class="flex flex-row w-full justify-content-between">
               <div class="flex flex-row align-items-center gap-2">
                  <span class="span-cuadrado">
                     <i class="pi pi-graduation-cap"></i>
                  </span>
                  <h3>Consultoría Tecnológica</h3>
               </div>
               <div class="flex flex-row align-items-center gap-2">
                  <span class="span-circulo">
                     <i class="pi pi-arrow-up-right" style="color: white"></i>
                  </span>
                  <p>Más Información</p>
               </div>
            </div>
            <div>
               <p>
                  En la era digital, contar con el asesoramiento adecuado es
                  crucial para el éxito de su negocio. Nuestro servicio de
                  consultoría tecnológica ofrece soluciones estratégicas y
                  personalizadas para optimizar sus operaciones y alcanzar sus
                  objetivos empresariales.
               </p>
            </div>
            <div class="flex w-full justify-content-end">
               <h3>Starts From $1,500</h3>
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
   height: 400px;
   width: 100%;
   border-radius: 4px;
   background-color: #1a1a1a;
   padding: 32px;
   display: flex;
   flex-direction: column;
   justify-content: space-between;
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
   font-size: 1.5rem;
}
@media (max-width: 600px) {
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
      font-size: 13px;
   }
   p {
      color: #b3b3b2;
      font-size: 0.8rem;
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
