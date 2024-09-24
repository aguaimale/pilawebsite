<template>
   <div class="grid">
      <div class="col-12 p-3">
         <div class="flex- flex-row">
            <div class="flex flex-column">
               <header>
                  <menuBar v-if="showNav" />
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
import { computed } from 'vue';
import { useRoute } from 'vue-router';

const route = useRoute();
const showNav = computed(() => {
   return route.meta.showNav !== false && !route.path.startsWith('/profile');
});
</script>

<style scoped></style>
