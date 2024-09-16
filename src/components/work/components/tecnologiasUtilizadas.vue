<template>
   <div class="w-full">
      <Accordion>
         <AccordionPanel
            v-for="tab in tabs"
            :key="tab.title"
            :value="tab.value"
         >
            <AccordionHeader
               :pt="{
                  root: {
                     style: {
                        backgroundColor: '#1a1a1a',
                        border: 'none',
                        marginBottom: '0px',
                        borderRadius: '8px',
                        height: '2px',
                        color: 'white',
                     },
                  },
               }"
            >
               {{ tab.title }}
            </AccordionHeader>
            <AccordionContent
               :pt="{
                  content: {
                     style: {
                        border: 'none',
                        borderRadius: '8px',
                     },
                  },
               }"
            >
               <p class="m-0">
                  {{ tab.content }}
               </p>
            </AccordionContent>
         </AccordionPanel>
      </Accordion>
   </div>
</template>

<script setup>
import { ref } from 'vue';

const tabs = ref([
   {
      title: 'Tecnologías utilizadas',
      content:
         ' Desarrollado utilizando herramientas confiables y modernas, enfocadas en crear interfaces rápidas, seguras y fáciles de usar. La gestión eficiente de datos y la integración con servicios externos permiten ofrecer una plataforma ágil y estable, asegurando una experiencia de usuario optimizada. Estas tecnologías contribuyen a mejorar los tiempos de operación y a facilitar una toma de decisiones más eficiente.',
      value: '0',
   },
]);
</script>
<style scoped>
p {
   color: #b3b3b2;
}
</style>
