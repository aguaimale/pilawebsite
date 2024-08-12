<template>
   <div class="mb-6">
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
}
p {
   color: #949494;
}
@media (max-width: 600px) {
   h1 {
      font-size: 3.5rem;
      margin: 0px;
   }
   p {
      font-size: 0.9rem;
   }
}
</style>
