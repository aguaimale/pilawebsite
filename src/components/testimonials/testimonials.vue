<template>
   <div
      class="flex flex-column flex sm:flex-column justify-content-between align-items-center h-auto mt-3 p-3 gap-2"
      style="border: 2px solid #1f1f1f; border-radius: 8px"
   >
      <div class="header">
         <h2>TESTIMONIOS</h2>
      </div>
      <div class="flex flex-column sm:flex-row w-full gap-2">
         <div class="flex sm:flex-row gap-2 w-full">
            <div class="card"></div>
            <div class="card"></div>
         </div>
         <div class="flex sm:flex-row gap-2 w-full">
            <div class="card"></div>
            <div class="card"></div>
         </div>
      </div>
   </div>
</template>

<script setup></script>

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
   height: 400px;
   width: 100%;
   border-radius: 4px;
   background-color: #1a1a1a;
}
@media (max-width: 600px) {
   .card {
      height: 200px;
      width: 100%;
   }
}
</style>
