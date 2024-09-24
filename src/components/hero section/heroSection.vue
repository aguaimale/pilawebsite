<template>
   <div class="flex flex-column flex sm:flex-row h-auto">
      <div class="card card-uno">
         <div>
            <Hero />
         </div>
      </div>
   </div>
   <div>
      <slider />
   </div>
   <div>
      <metricas />
   </div>
</template>

<script setup>
import slider from './components/slider.vue';
import Hero from './components/Hero.vue';
import metricas from './components/metricas.vue';
</script>

<style scoped>
.card {
   height: 36rem;
}

.card-uno {
   width: 100%;
   background-color: #1a1a1a;
   border-radius: 8px;
   padding: 24px;
   display: flex;
   align-items: center;
   background-image: url('./assets/imagensvgwebpila.svg');
   background-size: contain;
   background-blend-mode: color-dodge;
   background-repeat: no-repeat;
   background-position: right 5px;
}

.card-dos {
   width: 30%;
   background-color: #1a1a1a;
   border-radius: 8px;
}
@media (min-width: 1025px) {
   .card {
      height: 28rem;
   }
}
@media (min-width: 1280px) {
   .card {
      height: 42.5rem;
   }
}
@media (max-width: 900px) {
   .card-uno {
      width: 100%;
      background-image: url('./assets/imagensvgwebpila.svg');
      background-size: cover;
      background-blend-mode: color-dodge;
      background-repeat: no-repeat;
      background-position: left;
   }
   .card-dos {
      width: 100%;
   }
   .herocard {
      width: 100%;
   }
   .herocard-mas {
      width: 100%;
   }
}
</style>
