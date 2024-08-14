<template>
   <div class="mt-6">
      <section class="mt-6" id="hero">
         <heroSection />
      </section>
      <section id="reasons">
         <reason />
      </section>
      <section id="services">
         <services />
      </section>
      <section id="works">
         <works />
      </section>
      <section id="testimonials">
         <testimonials />
      </section>
      <section id="questions">
         <questions />
      </section>
      <section id="calltoaction">
         <calltoaction />
      </section>
      <section id="footer">
         <footervue />
      </section>
   </div>
</template>
<script setup>
import heroSection from '@/components/hero section/heroSection.vue';
import reason from '../components/reasons to/reason.vue';
import services from '@/components/servicios/services.vue';
import works from '@/components/work/works.vue';
import testimonials from '@/components/testimonials/testimonials.vue';
import questions from '@/components/questions/questions.vue';
import calltoaction from '@/components/call to action/calltoaction.vue';
import footervue from '@/components/footer/footervue.vue';
</script>
<style scoped></style>
