<template>
   <div class="grid">
      <div class="col-12 p-3">
         <div class="flex- flex-row">
            <div class="flex flex-column">
               <header>
                  <menuBar />
               </header>
               <main id="content" class="flex flex-column mt-1 content">
                  <router-view />
               </main>
            </div>
         </div>
      </div>
   </div>
</template>

<script setup>
import { RouterView } from 'vue-router';
import menuBar from './components/menuBar.vue';
</script>

<style scoped></style>
