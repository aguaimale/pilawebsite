<template>
   <div class="header mt-3 mb-3">
      <h2>PREGUNTAS FRECUENTES</h2>
   </div>
   <div class="flex flex-column flex sm:flex-row gap-2 h-auto">
      <div class="card card-uno">
         <preguntasfrecuentes />
      </div>
      <div class="card card-dos">
         <div class="title"><h3>Realiza tu consulta</h3></div>
         <formulario />
      </div>
   </div>
</template>

<script setup>
import formulario from '@/components/questions/components/formulario.vue';
import preguntasfrecuentes from './components/preguntasfrecuentes.vue';
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
   height: 32rem;
}
.card-uno {
   width: 70%;
   border-radius: 8px;
   padding: 24px;
   display: flex;
   justify-content: center;
   align-items: center;
   border: 2px solid #1a1a1a;
}
.card-dos {
   width: 30%;
   background-color: #1a1a1a;
   border-radius: 8px;
   padding: 8px;
   display: flex;
   flex-direction: column;
   align-items: center;
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
.title {
   width: 100%;
   padding-left: 16px;
}
@media (max-width: 600px) {
   .card-uno {
      width: 100%;
      height: fit-content;
      border: 2px solid #1a1a1a;
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

   h2 {
      font-size: 1rem;
      font-weight: 700;
   }
}
</style>
