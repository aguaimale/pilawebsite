<template>
   <div>
      <div class="service-slot">
         <div class="slider">
            <ul class="horizontal-list">
               <li v-for="(service, index) in services" :key="index">
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
   'Digital Marketing',
   'SEO Optimization',
   'Content Management Systems',
   'UI/UX Design',
   'Cloud Services',
   'IT Consulting',
   'Web Design',
   'Mobile App Development',
   'Web Development',
   'E-commerce Solutions',
   'Digital Marketing',
   'SEO Optimization',
   'Content Management Systems',
   'UI/UX Design',
   'Cloud Services',
   'IT Consulting',
   'Web Design',
   'Mobile App Development',
   'Web Development',
   'E-commerce Solutions',
   'Digital Marketing',
   'SEO Optimization',
   'Content Management Systems',
   'UI/UX Design',
   'Cloud Services',
   'IT Consulting',
   'Web Design',
   'Mobile App Development',
   'Web Development',
   'E-commerce Solutions',
   'Digital Marketing',
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
   margin-top: 12px;
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
   animation: slide 240s linear infinite;
}
.horizontal-list li {
   margin-right: 30px;
   white-space: nowrap;
}
@keyframes slide {
   0% {
      transform: translateX(-100%);
   }
   100% {
      transform: translateX(100%);
   }
}
.bullet {
   color: aquamarine;
   font-weight: 800;
   margin-right: 10px;
}
</style>
