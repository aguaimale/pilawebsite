<template>
   <div class="w-full">
      <Accordion value="0">
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
                        marginBottom: '12px',
                        borderRadius: '8px',
                        height: '35px',
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
                        backgroundColor: '#1a1a1a',
                        borderRadius: '8px',
                        marginBottom: '7px',
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
      title: '¿Qué servicios ofrece Pila IT?',
      content:
         'Pila IT ofrece una gama de servicios que incluyen desarrollo de software, consultoría en TI, integración de sistemas y soporte técnico. Nos especializamos en crear soluciones a medida para satisfacer las necesidades únicas de nuestros clientes.',
      value: '0',
   },
   {
      title: '¿Cómo puedo contactar a Pila IT para soporte?',
      content:
         'Puede contactar a nuestro equipo de soporte a través del correo electrónico support@pilait.com o llamarnos al (123) 456-7890. Nuestro horario de soporte es de lunes a viernes, de 9 AM a 6 PM.',
      value: '1',
   },
   {
      title: '¿Ofrecen servicios de desarrollo personalizado?',
      content:
         'Sí, en Pila IT nos especializamos en el desarrollo de software personalizado. Trabajamos estrechamente con nuestros clientes para entender sus necesidades y desarrollar soluciones que se adapten a sus requisitos específicos.',
      value: '2',
   },
   {
      title: '¿Qué tecnologías utilizan?',
      content:
         'En Pila IT utilizamos una variedad de tecnologías modernas y eficientes, incluyendo pero no limitado a JavaScript, Python, Java, C#, y frameworks como Vue.js, React, y Angular.',
      value: '3',
   },
   {
      title: '¿Cómo puedo solicitar una cotización?',
      content:
         'Puede solicitar una cotización llenando el formulario en nuestro sitio web o enviándonos un correo electrónico a sales@pilait.com con los detalles de su proyecto. Nos pondremos en contacto con usted lo antes posible.',
      value: '4',
   },
]);
</script>
