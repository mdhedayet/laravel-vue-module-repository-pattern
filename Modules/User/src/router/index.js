const componentRoutes = [
  {
    path: '/user',
    name: 'UserRoot',
    component: () => import('../views/App.vue'),
  }
];

export default componentRoutes;
