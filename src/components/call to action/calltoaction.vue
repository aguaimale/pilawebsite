<template>
   <div>
      <div class="callto">
         <h2>¿Listo para transformar tu presencia digital?</h2>
         <div class="text-button">
            <p>
               Da el primer paso hacia el éxito digital nuestro equipo de
               expertos está listo para crear soluciones que impulsen el
               crecimiento de su negocio.
            </p>
            <Button severity="contrast">Contactanos</Button>
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
   background-color: aquamarine;
   height: 250px;
   border-radius: 8px;
   margin-top: 16px;
   margin-bottom: 16px;
   display: flex;
   flex-direction: column;
   justify-content: center;
   align-items: flex-start;
   padding: 64px;
}
h2 {
   color: black;
   font-size: 3rem;
   margin-bottom: 3px;
   margin-top: 3px;
}
p {
   color: black;
}
.text-button {
   display: flex;
   flex-direction: row;
   justify-content: space-between;
   width: 90%;
}
@media (max-width: 900px) {
   .callto {
      padding: 12px;
   }
   h2 {
      font-size: 1.5rem;
   }
   p {
      color: black;
      font-size: 0.8rem;
   }
   .text-button {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      width: 100%;
   }
}
</style>
