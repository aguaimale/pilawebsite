<template>
   <div
      class="flex flex-row justify-content-between w-full mt-2 p-3 border-round-md gap-3"
      style="border: 2px solid #1f1f1f"
   >
      <Card class="card">
         <template #content>
            <div class="flex flex-column align-items-center">
               <p class="m-2">Clientes</p>
               <h4 class="stats">700</h4>
            </div>
         </template>
      </Card>
      <Card class="card">
         <template #content>
            <div class="flex flex-column align-items-center">
               <p class="m-0">Proyectos</p>
               <h4 class="stats">+280</h4>
            </div>
         </template>
      </Card>
      <Card class="card">
         <template #content>
            <div class="flex flex-column align-items-center">
               <p class="m-0">Clientes felices</p>
               <h4 class="stats">100%</h4>
            </div>
         </template>
      </Card>
      <Card class="card">
         <template #content>
            <div class="flex flex-column align-items-center">
               <p class="m-0">Seguidores</p>
               <h4 class="stats">230K</h4>
            </div>
         </template>
      </Card>
      <Card class="card">
         <template #content>
            <div class="flex flex-column align-items-center border-1 h-3rem">
               <p class="m-0">Años de Experiencia</p>
               <h4 class="stats">+10</h4>
            </div>
         </template>
      </Card>
      <Card class="card">
         <template #content>
            <div class="flex flex-column align-items-center border-1">
               <p class="m-0">Conoce más</p>
               <span class="circle-arrow"
                  ><i class="pi pi-arrow-up-right" style="font-size: 1.5rem"></i
               ></span>
            </div>
         </template>
      </Card>
   </div>
</template>

<script setup></script>

<style scoped>
.card {
   width: 40%;
   background-color: #1a1a1a;
   display: flex;
   align-items: center;
   justify-content: center;
   max-height: 150px;
}
.stats {
   color: #6b4fbc;
   font-weight: 600;
   font-size: 3rem;
}
p {
   font-weight: 500;
   font-size: 0.8rem;
}
.circle-arrow {
   width: 50px;
   height: 50px;
   background-color: black;
   display: flex;
   justify-content: center;
   align-items: center;
   border-radius: 300px;
   margin-top: 8px;
}
</style>
