<template>
   <div>
      <div class="callto">
         <div class="content">
            <h2>¡Llevá tu empresa al próximo nivel!</h2>
            <div class="text-button">
               <p>
                  En Pila IT, te brindamos soluciones que impulsan el
                  crecimiento y facilitan el día a día de tu negocio.<br />
                  <b>
                     ¡Comienza hoy y descubre todo lo que podemos lograr juntos!
                  </b>
               </p>
            </div>
         </div>
      </div>
      <slider />
   </div>
</template>

<script setup>
import slider from '@/components/hero section/components/slider.vue';
</script>

<style scoped>
.callto {
   position: relative; /* Necesario para posicionar el overlay dentro del contenedor */
   background-image: url('./calltoAction.png');
   background-size: cover;
   background-position: bottom;
   background-repeat: no-repeat;
   height: 350px;
   border-radius: 8px;
   margin-top: 16px;
   margin-bottom: 16px;
   display: flex;
   flex-direction: column;
   justify-content: center;
   align-items: start;
   padding: 64px;
   color: rgb(0, 0, 0);
   overflow: hidden;
}

.callto::before {
   content: '';
   position: absolute;
   top: 0;
   left: 0;
   right: 0;
   bottom: 0;
   background: rgba(0, 0, 0, 0.4); /* Overlay oscuro */
   z-index: 1; /* Overlay por debajo del contenido */
}

.callto .content {
   position: relative;
   z-index: 2; /* Contenido por encima del overlay */
   color: #ffffff; /* Color del texto blanco para contraste */
   width: 100%; /* Asegura que el contenido ocupe el ancho completo */
}

h2 {
   font-size: 3rem;
   margin-bottom: 3px;
   margin-top: 3px;
   color: rgb(255, 255, 255);
}

p {
   color: rgb(255, 255, 255);
}

.text-button {
   display: flex;
   flex-direction: column;
   justify-content: center;
   align-items: start;
   width: 100%;
}

@media (max-width: 900px) {
   .callto {
      position: relative; /* Necesario para posicionar el overlay dentro del contenedor */
      background-image: url('./calltoAction.png');
      background-size: cover;
      background-position: bottom;
      background-repeat: no-repeat;
      height: 200px;
      border-radius: 8px;
      margin-top: 16px;
      margin-bottom: 16px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: start;
      padding: 64px;
      color: rgb(0, 0, 0);
      overflow: hidden;
   }

   .callto::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.4); /* Overlay oscuro */
      z-index: 1; /* Overlay por debajo del contenido */
   }

   .callto .content {
      position: relative;
      z-index: 2; /* Contenido por encima del overlay */
      color: #ffffff; /* Color del texto blanco para contraste */
      width: 100%; /* Asegura que el contenido ocupe el ancho completo */
   }

   h2 {
      font-size: 1.4rem;
   }
   p {
      font-size: 0.8rem;
   }
   .text-button {
      flex-direction: column; /* Mantiene la disposición en columna en móviles */
   }
}
</style>
