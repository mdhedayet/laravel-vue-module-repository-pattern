const componentRoutes = [
  {
    path: '/admin',
    name: 'AdminRoot',
    component: () => import('../views/App.vue'),
  }
];

export default componentRoutes;
