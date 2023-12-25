// resources/js/app.js
import { createApp } from 'vue';
import MainApp from './App.vue'
import Router from './router';


const app = createApp(MainApp);

app.use(Router);

app.mount('#app');
