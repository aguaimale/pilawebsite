<template>
   <div>
      <div
         class="flex flex-column sm:flex-row justify-content-between align-items-center h-auto mt-3 p-3 gap-2"
         style="border: 2px solid #1f1f1f; border-radius: 8px"
      >
         <div class="flex sm:flex-row gap-2 w-full">
            <div class="herocard">
               <p>Clientes</p>
               <h4 class="stats" data-target="200" data-suffix="+">0</h4>
            </div>

            <div class="herocard">
               <p>Proyectos</p>
               <h4 class="stats" data-target="280" data-suffix="+">0</h4>
            </div>
         </div>

         <div class="flex sm:flex-row gap-2 w-full">
            <div class="herocard">
               <p>Clientes felices</p>
               <h4 class="stats" data-target="100" data-suffix="%">0</h4>
            </div>

            <div class="herocard">
               <p>Seguidores</p>
               <h4 class="stats" data-target="50" data-suffix="k">0</h4>
            </div>
         </div>
         <div class="flex flex-column sm:flex-row gap-2 w-full">
            <div class="herocard">
               <p>Años de experiencia</p>
               <h4 class="stats" data-target="20" data-suffix="+">0</h4>
            </div>

            <div class="herocard-mas">
               <span class="circle-arrow">
                  <i
                     class="pi pi-arrow-up-right"
                     style="font-size: 1.5rem; color: #1f1f1f"
                  ></i>
               </span>
               <p class="m-0">Conoce más</p>
            </div>
         </div>
      </div>
   </div>
</template>

<script setup>
import { onMounted } from 'vue';

const animateNumbers = () => {
   const elements = document.querySelectorAll('.stats');
   elements.forEach((element) => {
      const target = +element.dataset.target;
      const suffix = element.dataset.suffix || '';
      const duration = 2000; // Duración de la animación en ms
      const stepTime = Math.abs(Math.floor(duration / target));
      let startValue = 0;

      const step = () => {
         if (startValue < target) {
            startValue += 1;
            element.textContent = startValue + suffix;
            setTimeout(step, stepTime);
         } else {
            element.textContent = target + suffix;
         }
      };
      step();
   });
};

onMounted(() => {
   animateNumbers();
});
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
   transition: color 0.3s ease;
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
