<template>
   <div class="mt-">
      <h1>
         Create,<br />
         build and inspired.
      </h1>
      <div>
         <p class="mb-5">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.<br />Tempore
            quis impedit eum voluptas atque voluptates dolorem rerum saepe<br />
            inventore iusto accusantium earum, adipisci quas provident maxime
            deserunt aspernatur libero obcaecati?
         </p>
         <div class="flex flex-row gap-4 mt-3">
            <Button label="Comenzar" outlined />
            <Button label="Comenzar" />
         </div>
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

@media (max-width: 600px) {
   h1 {
      font-size: 5rem;
      margin: 0px;
   }
}
</style>
