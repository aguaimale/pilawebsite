<template>
   <div
      class="flex flex-column flex sm:flex-column justify-content-between align-items-center h-auto mt-3 p-3 gap-2"
      style="border: 2px solid #1f1f1f; border-radius: 8px"
   >
      <div class="flex flex-column sm:flex-row w-full gap-2">
         <div class="flex sm:flex-row gap-2 w-full">
            <div class="card">
               <div class="flex flex-column justify-content-between h-full">
                  <div
                     class="flex flex-row w-full justify-content-between mt-2"
                  >
                     <div class="flex flex-row align-items-center">
                        <span class="span-cuadrado">
                           <i class="pi pi-instagram"></i>
                        </span>
                     </div>
                     <div class="flex flex-row align-items-center">
                        <span class="span-circulo">
                           <i
                              class="pi pi-arrow-up-right"
                              style="color: white"
                           ></i>
                        </span>
                     </div>
                  </div>
                  <div>
                     <h3>INSTAGRAM</h3>
                     <p>
                        Nuestro servicio de diseño web se enfoca en la creación
                        de sitios web visualmente impactantes y altamente
                        intuitivos.
                     </p>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="flex flex-column justify-content-between h-full">
                  <div
                     class="flex flex-row w-full justify-content-between mt-2"
                  >
                     <div class="flex flex-row align-items-center">
                        <span class="span-cuadrado">
                           <i class="pi pi-facebook"></i>
                        </span>
                     </div>
                     <div class="flex flex-row align-items-center">
                        <span class="span-circulo">
                           <i
                              class="pi pi-arrow-up-right"
                              style="color: white"
                           ></i>
                        </span>
                     </div>
                  </div>
                  <div>
                     <h3>FACEBOOK</h3>
                     <p>
                        Nuestro servicio de diseño web se enfoca en la creación
                        de sitios web visualmente impactantes y altamente
                        intuitivos.
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="flex sm:flex-row w-full">
            <div class="card-links">
               <div class="flex flex-column">
                  <h4>Home</h4>
                  <p>Why Us</p>
                  <p>About Us</p>
                  <p>Testimonials</p>
                  <p>FAQ’s</p>
               </div>
               <div class="flex flex-column">
                  <h4>Servicios</h4>
                  <p>Web Development</p>
                  <p>App Development</p>
                  <p>Web Design</p>
                  <p>Digital Marketing</p>
               </div>
               <div class="flex flex-column">
                  <h4>Proyectos</h4>
                  <p>Platform</p>
                  <p>Agrow</p>
                  <p>Octous</p>
                  <p>Platform web</p>
               </div>
            </div>
         </div>
      </div>
      <div class="flex flex-column sm:flex-row w-full gap-2">
         <div class="flex sm:flex-row gap-2 w-full">
            <div class="card">
               <div class="flex flex-column justify-content-between h-full">
                  <div
                     class="flex flex-row w-full justify-content-between mt-2"
                  >
                     <div class="flex flex-row align-items-center">
                        <span class="span-cuadrado">
                           <i class="pi pi-github"></i>
                        </span>
                     </div>
                     <div class="flex flex-row align-items-center">
                        <span class="span-circulo">
                           <i
                              class="pi pi-arrow-up-right"
                              style="color: white"
                           ></i>
                        </span>
                     </div>
                  </div>
                  <div>
                     <h3>GITHUB</h3>
                     <p>
                        Nuestro servicio de diseño web se enfoca en la creación
                        de sitios web visualmente impactantes y altamente
                        intuitivos.
                     </p>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="flex flex-column justify-content-between h-full">
                  <div
                     class="flex flex-row w-full justify-content-between mt-2"
                  >
                     <div class="flex flex-row align-items-center">
                        <span class="span-cuadrado">
                           <i class="pi pi-linkedin"></i>
                        </span>
                     </div>
                     <div class="flex flex-row align-items-center">
                        <span class="span-circulo">
                           <i
                              class="pi pi-arrow-up-right"
                              style="color: white"
                           ></i>
                        </span>
                     </div>
                  </div>
                  <div>
                     <h3>LINKEDING</h3>
                     <p>
                        Nuestro servicio de diseño web se enfoca en la creación
                        de sitios web visualmente impactantes y altamente
                        intuitivos.
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="flex flex-column sm:flex-column w-full gap-2">
            <div class="card-newsletter">
               <div>
                  <p>Newsletter</p>
                  <div>
                     <h3>Subscribite a nuestro Newsletter</h3>
                     <div class="flex flex-column gap-2">
                        <InputText
                           id="newsletter"
                           placeholder="Ingresa tu correo"
                           v-model="value"
                           size="large"
                        />
                     </div>
                  </div>
               </div>
            </div>
            <div class="card-footer">
               <p style="border-bottom: 1px solid #d9d9d9">
                  © 2024 PILA IT. All rights reserved.
               </p>

               <div class="flex flex-row gap-3">
                  <p>Terms & Conditions</p>
                  <p>Privacy Policy</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</template>

<script setup></script>
<style scoped>
.card {
   height: 400px;
   width: 100%;
   border-radius: 4px;
   background-color: #1a1a1a;
   padding: 24px;
}
.card-links {
   height: 400px;
   width: 100%;
   border-radius: 4px;
   background-color: #1a1a1a;
   padding: 24px;
   display: flex;
   flex-direction: row;
   align-items: center;
   justify-content: space-around;
}
.card-newsletter {
   height: 240px;
   width: 100%;
   border-radius: 4px;
   background-color: #1a1a1a;
   padding: 24px;
}
.card-footer {
   height: 150px;
   width: 100%;
   border-radius: 4px;
   background-color: #1a1a1a;
   padding: 24px;
   display: flex;
   flex-direction: row;
   justify-content: space-between;
   align-items: center;
}
#newsletter {
   background-color: #000000;
   border: #1a1a1a;
}
.span-cuadrado {
   border: 1px solid rgb(54, 54, 54);
   border-radius: 16px;
   height: 45px;
   width: 45px;
   display: flex;
   flex-direction: column;
   align-items: center;
   justify-content: center;
}
.span-circulo {
   width: 45px;
   height: 45px;
   border: 1px solid rgb(54, 54, 54);
   display: flex;
   justify-content: center;
   align-items: center;
   border-radius: 300px;
   margin-right: 8px;
}
i {
   color: aquamarine;
   font-size: 1.5rem;
}
p {
   color: #b3b3b2;
}
@media (max-width: 600px) {
   .card {
      height: 220px;
      width: 100%;
      padding: 12px;
   }
   h2 {
      font-size: 0.9rem;
      font-weight: 700;
   }
   h3 {
      font-size: 13px;
   }
   p {
      color: #b3b3b2;
      font-size: 0.8rem;
   }
   i {
      color: aquamarine;
      font-size: 0.8rem;
   }
   .span-cuadrado {
      border: 1px solid rgb(54, 54, 54);
      border-radius: 16px;
      height: 40px;
      width: 40px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
   }
   .span-circulo {
      width: 40px;
      height: 40px;
      border: 1px solid rgb(54, 54, 54);
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 300px;
      margin-right: 8px;
   }
   .card-links {
      height: 300px;
      width: 100%;
      border-radius: 4px;
      background-color: #1a1a1a;
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: space-between;
   }
   .card-newsletter {
      height: 200px;
   }
   .card-footer {
      height: 100px;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 12px;
   }
}
</style>
