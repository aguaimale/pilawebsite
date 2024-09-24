import { createRouter, createWebHashHistory } from 'vue-router';
import HomeView from '@/views/HomeView.vue';
import Profile from '@/views/Profile.View.vue';
import Child1 from '@/components/profile/Child1.vue';
import Child2 from '@/components/profile/Child2.vue';

const router = createRouter({
   history: createWebHashHistory(),
   routes: [
      {
         path: '/',
         name: 'home',
         component: HomeView,
         meta: { showNav: true },
      },
      {
         path: '/profile',
         name: 'Profile',
         component: Profile,
         children: [
            {
               path: '00001',
               name: '00001',
               component: Child1,
               meta: { showNav: false },
            },
            {
               path: '00002',
               name: '00002',
               component: Child2,
               meta: { showNav: false },
            },
         ],
         meta: { showNav: false },
      },
   ],
});

export default router;
