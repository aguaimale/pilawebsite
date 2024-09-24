<template>
   <div class="child">
      <div class="flex flex-column sm:flex-column align-items-center gap-4 p-3">
         <div
            class="flex flex-column sm:flex-column align-items-center gap-1 p-2"
         >
            <img
               class="profile-img mb-3"
               src="../work/assets/diego.png"
               alt="diego"
               width="50%"
            />
            <div>
               <h2 class="m-0">Diego Schaberger</h2>
               <p class="mt-2">CIO (Chief Information Officer)</p>
            </div>
            <p>
               CIO en <span> Pila <sup>IT</sup>.</span>
            </p>
         </div>
      </div>
      <div class="flex flex-column sm:flex-column w-full gap-3 p-2">
         <Button
            label="WhastApp"
            severity="primary"
            @click="openWhatsApp"
         ></Button>
         <Button label="E-mail" severity="info" @click="sendEmail"></Button>
         <Button
            label="Sitio Web"
            severity="info"
            @click="openWebsite"
         ></Button>
      </div>
   </div>
</template>

<script setup>
const openWhatsApp = () => {
   window.open('https://wa.me/5493492584819?text=Hola%20Diego', '_blank');
};

const sendEmail = () => {
   window.location.href = 'mailto:diegos@pilait.com.ar';
};

const openWebsite = () => {
   window.open('https://www.pilait.com.ar', '_blank');
};
</script>

<style scoped>
.child {
   padding: 10px;
   background-color: #1a1a1a;
   color: white;
   display: flex;
   flex-direction: column;
   justify-content: center;
   align-items: center;
   height: 100%;
   border-radius: 12px;
   max-width: 375px;
   border: 1px solid #5c5c5c;
}

.profile-img {
   border-radius: 500px;
   border: 3px solid #5c5c5c;
}
p {
   color: #5c5c5c;
   font-size: 15px;
   font-weight: 500;
}
span {
   font-weight: 600;
}

sup {
   font-weight: 600;
   color: aquamarine;
}
</style>
