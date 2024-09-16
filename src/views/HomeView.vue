<template>
   <div class="mt-6">
      <section class="mt-6" id="home">
         <heroSection />
      </section>
      <section class="mt-6" id="nosotros">
         <reason />
      </section>
      <section class="mt-6" id="servicios">
         <services />
      </section>
      <section class="mt-5" id="proyectos">
         <works />
      </section>
      <section class="mt-5" id="questions">
         <questions />
      </section>
      <section id="calltoaction">
         <calltoaction />
      </section>
      <section class="mt-5" id="contacto">
         <footervue />
      </section>
   </div>
</template>

<script setup>
import heroSection from '@/components/hero section/heroSection.vue';
import reason from '../components/reasons to/reason.vue';
import services from '@/components/servicios/services.vue';
import works from '@/components/work/works.vue';
import questions from '@/components/questions/questions.vue';
import calltoaction from '@/components/call to action/calltoaction.vue';
import footervue from '@/components/footer/footervue.vue';
</script>

<style scoped></style>
