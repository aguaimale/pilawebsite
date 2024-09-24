<template>
   <div>
      <div class="service-slot">
         <div class="slider">
            <ul class="horizontal-list">
               <li
                  v-for="(service, index) in [...services, ...services]"
                  :key="index"
               >
                  <span class="bullet"> • </span> {{ service }}
               </li>
            </ul>
         </div>
      </div>
   </div>
</template>

<script setup>
import { ref } from 'vue';

const services = ref([
   'Web Design',
   'Mobile App Development',
   'Web Development',
   'E-commerce Solutions',
   'SEO Optimization',
   'Content Management Systems',
   'UI/UX Design',
   'Cloud Services',
   'IT Consulting',
]);
</script>

<style scoped>
.service-slot {
   background-color: black;
   border-radius: 8px;
   padding: 8px;
   overflow: hidden;
   margin-top: 6px;
}
.slider {
   display: flex;
   overflow: hidden;
}
.horizontal-list {
   display: flex;
   list-style: none;
   padding: 0;
   margin: 0;
   animation: slide 60s linear infinite;
}
.horizontal-list li {
   margin-right: 30px;
   white-space: nowrap;
}
@keyframes slide {
   0% {
      transform: translateX(-50%);
   }
   100% {
      transform: translateX(0%);
   }
}
.bullet {
   color: aquamarine;
   font-weight: 800;
   margin-right: 10px;
}
@media (min-width: 1025px) {
   li {
      font-size: 14px;
   }
}
</style>
