<template>
   <div>
      <h1>Create, <br />build and inspire.</h1>
      <div>
         <p class="mb-5">
            En Pila IT, sabemos que las soluciones digitales pueden transformar
            negocios. Nuestro equipo de especialistas está comprometido a
            apoyar<br />
            empresas como la suya para que sobresalgan en un entorno digital en
            constante evolución.
         </p>
      </div>
   </div>
</template>

<script setup></script>

<style scoped>
h1 {
   font-size: 9rem;
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

@media (max-width: 900px) {
   h1 {
      font-size: 5rem;
      margin: 0px;
   }
}
</style>
