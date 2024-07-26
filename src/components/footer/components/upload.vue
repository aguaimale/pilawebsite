<template>
   <div class="flex flex-row justify-content-start mt-3">
      <Toast />
      <FileUpload
         mode="basic"
         name="demo[]"
         url="/api/upload"
         accept="image/*"
         :maxFileSize="1000000"
         @upload="onUpload"
         :auto="true"
         chooseLabel="Cargar CV"
      />
   </div>
</template>

<script setup>
import { useToast } from 'primevue/usetoast';
const toast = useToast();

const onUpload = () => {
   toast.add({
      severity: 'info',
      summary: 'Success',
      detail: 'Documento Cargado',
      life: 3000,
   });
};
</script>
