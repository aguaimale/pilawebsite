<template>
   <div class="flex flex-column flex sm:flex-row gap-2 h-auto">
      <div class="card card-uno gap-5">
         <div>
            <Hero />
         </div>
         <div class="slider">
            <slider />
         </div>
      </div>
   </div>
   <div>
      <div
         class="flex flex-column flex sm:flex-row justify-content-between align-items-center h-auto mt-3 p-3 gap-2"
         style="border: 2px solid #1f1f1f; border-radius: 8px"
      >
         <div class="flex sm:flex-row gap-2 w-full">
            <div class="herocard">
               <p>Clientes</p>
               <h4 class="stats">200+</h4>
            </div>

            <div class="herocard">
               <p>Proyectos</p>
               <h4 class="stats">280+</h4>
            </div>
         </div>

         <div class="flex sm:flex-row gap-2 w-full">
            <div class="herocard">
               <p>Clientes felices</p>
               <h4 class="stats">100%</h4>
            </div>

            <div class="herocard">
               <p>Seguidores</p>
               <h4 class="stats">100k</h4>
            </div>
         </div>
         <div class="flex flex-column flex sm:flex-row gap-2 w-full">
            <div class="herocard">
               <p>Años de experiencia</p>
               <h4 class="stats">20+</h4>
            </div>

            <div class="herocard-mas">
               <span class="circle-arrow"
                  ><i
                     class="pi pi-arrow-up-right"
                     style="font-size: 1.5rem; color: #1f1f1f"
                  ></i
               ></span>
               <p class="m-0">Conoce más</p>
            </div>
         </div>
      </div>
   </div>
</template>

<script setup>
import slider from './components/slider.vue';
import Hero from './components/Hero.vue';
</script>

<style scoped>
.card {
   height: 42rem;
}
.card-uno {
   width: 100%;
   background-color: #1a1a1a;
   border-radius: 8px;
   padding: 24px;
   justify-content: space-between;
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
