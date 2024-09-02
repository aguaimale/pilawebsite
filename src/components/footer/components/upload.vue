<template>
   <div class="flex flex-row justify-content-start mt-3">
      <Toast />
      <form action="upload.php" method="post" enctype="multipart/form-data">
         <FileUpload
            mode="basic"
            name="archivo[]"
            accept=".pdf"
            :maxFileSize="1000000"
            @upload="onUpload"
            :auto="true"
            chooseLabel="Cargar CV"
         />
      </form>
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
