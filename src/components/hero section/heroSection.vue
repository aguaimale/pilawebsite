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
   height: 39rem;
}
.card-uno {
   width: 100%;
   background-color: #1a1a1a;
   border-radius: 8px;
   padding: 24px;
   display: flex;
   align-items: center;
}

.card-dos {
   width: 30%;
   background-color: #1a1a1a;
   border-radius: 8px;
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
.herocard {
   display: flex;
   flex-direction: column;
   justify-content: center;
   align-items: center;
   height: 100px;
   width: 100%;
   background-color: #1a1a1a;
   border-radius: 8px;
   padding: 3px;
}
.herocard-mas {
   display: flex;
   flex-direction: row;
   justify-content: center;
   align-items: center;
   height: 100px;
   width: 100%;
   background-color: #1a1a1a;
   border-radius: 8px;
   padding: 3px;
}
.stats {
   color: #6b4fbc;
   font-weight: 600;
   font-size: 2.6rem;
   margin-top: 0;
   margin-bottom: 8px;
}
p {
   font-weight: 500;
   font-size: 0.8rem;
   margin: 0;
   margin-top: 8px;
}
@media (max-width: 600px) {
   .card-uno {
      width: 100%;
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
