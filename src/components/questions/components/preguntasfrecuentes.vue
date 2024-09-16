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
                        marginBottom: '8px',
                        borderRadius: '8px',
                        height: '30px',
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
                        marginBottom: '20px',
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
         'Ofrecemos una gama de opciones que incluye desarrollo de software, consultoría en IT, integración de sistemas y soporte técnico.  Creamos soluciones a medida que se adaptan a las necesidades únicas de cada cliente.',
      value: '0',
   },
   {
      title: '¿Cómo puedo contactar a Pila IT para soporte?',
      content:
         'Puede contactar al equipo de soporte a través del correo electrónico: info@pilait.com.ar Atención: Lunes a viernes, de 8 AM a 5 PM.',
      value: '1',
   },
   {
      title: '¿Ofrecen servicios de desarrollo personalizado?',
      content:
         'Sí, nos especializamos en el desarrollo de software a medida. Trabajamos estrechamente con nuestros clientes para entender sus necesidades y desarrollar soluciones que se adapten a sus requisitos específicos.',
      value: '2',
   },
   {
      title: '¿Qué tecnologías utilizan?',
      content:
         'Utilizamos herramientas y metodologías que nos permiten desarrollar soluciones robustas, escalables y seguras, adaptadas a las necesidades específicas de cada proyecto. Nuestra infraestructura tecnológica está diseñada para garantizar alto rendimiento, integración eficiente y soporte continuo.',
      value: '3',
   },
   {
      title: '¿Cómo puedo solicitar una cotización?',
      content:
         'Puede solicitarla completando el formulario en nuestro sitio o enviando un correo a: info@pilait.com.ar, con los detalles de su proyecto. Nos pondremos en contacto a la brevedad.',
      value: '4',
   },
]);
</script>
<style scoped>
p {
   color: #b3b3b2;
}
</style>
