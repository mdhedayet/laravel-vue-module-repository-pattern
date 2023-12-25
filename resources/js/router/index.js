// modules/User/src/router/index.js
import { createRouter, createWebHistory } from 'vue-router';
import AdminRouter from '../../../Modules/Admin/src/router';
import UserRouter from '../../../Modules/User/src/router';
import Login from '../views/Login.vue'


const routes = [
  ...AdminRouter,
  ...UserRouter,
  {
    path: '/',
    name: 'Login',
    component: Login,
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;