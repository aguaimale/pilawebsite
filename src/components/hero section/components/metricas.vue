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
         </div>
         <div class="flex flex-column sm:flex-row gap-2 w-full">
            <div class="herocard">
               <p>Años de experiencia</p>
               <h4 class="stats" data-target="20" data-suffix="+">0</h4>
            </div>

            <div class="herocard-mas" @click="visible = true">
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
      <Dialog
         v-model:visible="visible"
         modal
         header="Sobre Pila IT"
         :style="{
            width: '50rem',
            backgroundColor: '#1a1a1a',
            border: '#1a1a1a',
         }"
         :breakpoints="{ '1199px': '75vw', '575px': '90vw' }"
      >
         <p class="m-0 font-lighter">
            Somos parte del Grupo Bertolaccini, una empresa innovadora que en
            los 80 entendió lo fundamental de la computación como parte de su
            estructura de trabajo y negocio.
         </p>
         <p class="mt-3 font-lighter">
            Nacimos dando servicios de forma interna, como un área corporativa,
            pero crecimos y desde 2020 somos una unidad de negocio, mejor
            conocida como PILA iT.
         </p>
         <p class="mt-2 font-lighter">
            De Rafaela (Santa Fe) al mundo, desde el interior del interior de
            Argentina, brindamos servicios globales gracias a nuestra
            experiencia en trabajo remoto y la co-creación digital con nuestros
            clientes.
         </p>
         <p class="mt-2 font-lighter">
            Construimos con metodologías ágiles y las últimas tecnologías para
            asegurar una colaboración efectiva, de calidad y soluciones
            escalables.
         </p>
         <p class="mt-1">
            Los desafíos nos inspiran por eso trabajamos con startups hasta
            grandes corporaciones, adaptando nuestras soluciones a las
            necesidades específicas.
         </p>
         <h3>A cada desarrollo que nos convocan le metemos PILA.</h3>
      </Dialog>
   </div>
</template>

<script setup>
import { onMounted } from 'vue';
import { ref } from 'vue';
const visible = ref(false);

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
   height: 40rem;
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
   cursor: pointer;
}

.stats {
   color: #6b4fbc;
   font-weight: 600;
   font-size: 2.6rem;
   margin-top: 0;
   margin-bottom: 8px;
   transition: color 0.3s ease;
}

p,
b {
   font-weight: 500;
   font-size: 0.8rem;
   margin: 0;
   margin-top: 8px;
   color: #b3b3b2;
}
h3 {
   color: #b3b3b2;
}
@media (min-width: 1025px) {
   .card {
      height: 40rem;
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
      height: 80px;
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
      height: 80px;
      width: 100%;
      background-color: #1a1a1a;
      border-radius: 8px;
      padding: 3px;
      cursor: pointer;
   }

   .stats {
      color: #6b4fbc;
      font-weight: 600;
      font-size: 2.2rem;
      margin-top: 0;
      margin-bottom: 8px;
      transition: color 0.3s ease;
   }

   p,
   b {
      font-weight: 500;
      font-size: 0.7rem;
      margin: 0;
      margin-top: 8px;
      color: #b3b3b2;
   }
}

@media (max-width: 900px) {
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
