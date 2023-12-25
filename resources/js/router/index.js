import { createRouter, createWebHistory } from 'vue-router';
import AdminRouter from '../../../Modules/Admin/src/router';
import UserRouter from '../../../Modules/User/src/router';


const routes = [
  ...AdminRouter,
  ...UserRouter,
  {
    path: '/',
    name: 'Login',
    component: () => import('../views/Login.vue'),
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;