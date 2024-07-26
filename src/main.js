import './assets/main.css';

import { createApp } from 'vue';

//importaciones primevue

import ToastService from 'primevue/toastservice';

import 'primeflex/primeflex.css';
import PrimeVue from 'primevue/config';
import Lara from '@primevue/themes/lara';
import 'primeicons/primeicons.css';

//  primevue ui components:
import Button from 'primevue/button';
import Menubar from 'primevue/menubar';
import Card from 'primevue/card';
import InputText from 'primevue/inputtext';
import Textarea from 'primevue/textarea';
import Accordion from 'primevue/accordion';
import AccordionPanel from 'primevue/accordionpanel';
import AccordionHeader from 'primevue/accordionheader';
import AccordionContent from 'primevue/accordioncontent';
import Avatar from 'primevue/avatar';
import AvatarGroup from 'primevue/avatargroup';
import Image from 'primevue/image';
import FileUpload from 'primevue/fileupload';
import Toast from 'primevue/toast';

import App from './App.vue';
import router from './router';

const app = createApp(App);
app.use(PrimeVue, {
   theme: {
      preset: Lara,
   },
});

//importaciones primevue
app.component('Button', Button);
app.component('Menubar', Menubar);
app.component('InputText', InputText);
app.component('Textarea', Textarea);
app.component('Accordion', Accordion);
app.component('AccordionPanel', AccordionPanel);
app.component('AccordionHeader', AccordionHeader);
app.component('AccordionContent', AccordionContent);
app.component('Avatar', Avatar);
app.component('AvatarGroup', AvatarGroup);
app.component('Image', Image);
app.component('FileUpload', FileUpload);
app.component('Toast', Toast);

app.component('Card', Card);
app.use(ToastService);
app.use(router);
app.mount('#app');
