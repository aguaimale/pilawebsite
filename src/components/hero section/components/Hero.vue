<template>
   <div>
      <h1 v-motion-fade-visible-once :delay="200" :duration="1200">
         Create, <br />build and inspire.
      </h1>
      <div>
         <p class="mb-1 font-semibold">
            En Pila IT diseñamos y damos forma a proyectos digitales porque
            sabemos que pueden transformar negocios.
         </p>
         <p class="mt-2 font-semibold">
            Somos aliados, generamos una sinergia tecnológica para el
            crecimiento de su propuesta.
         </p>
      </div>
   </div>
</template>

<script setup></script>

<style scoped>
h1 {
   font-size: 6rem;
   font-weight: 900;
   margin: 0px;
   color: #33333300;
   position: relative;
   overflow: hidden;
   background: linear-gradient(45deg, #65dcbf, #ffffff, #6b4fbc, #00ff66);
   background-size: 400% 400%;
   transition: background-position 5s ease;
   -webkit-background-clip: text;
   -webkit-text-fill-color: transparent;
}

h1:hover {
   background-position: 100% 0;
}
p {
   color: #b3b3b2;
   font-size: 14px;
}

@media (min-width: 1025px) {
   h1 {
      font-size: 3rem;
      font-weight: 900;
      margin: 0px;
      color: #33333300;
      position: relative;
      overflow: hidden;
      background: linear-gradient(45deg, #65dcbf, #ffffff, #6b4fbc, #00ff66);
      background-size: 400% 400%;
      transition: background-position 5s ease;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
   }
}
@media (min-width: 1280px) {
   h1 {
      font-size: 8rem;
      font-weight: 900;
      margin: 0px;
      color: #33333300;
      position: relative;
      overflow: hidden;
      background: linear-gradient(45deg, #65dcbf, #ffffff, #6b4fbc, #00ff66);
      background-size: 400% 400%;
      transition: background-position 5s ease;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
   }
   p {
      color: #b3b3b2;
      font-size: 16px;
   }
}

@media (max-width: 900px) {
   h1 {
      font-size: 4rem;
      margin: 0px;
   }
}
</style>
