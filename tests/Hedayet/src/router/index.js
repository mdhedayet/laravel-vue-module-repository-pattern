const componentRoutes = [
  {
    path: '/test',
    name: 'TestRoot',
    component: () => import('../views/Test.vue'),
  }
];

export default componentRoutes;
