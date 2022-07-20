/*
import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
*/

import { createApp } from 'vue';
import banner from './banner.vue';
import sidemenu from './sidemenu.vue';

const app = createApp({});
app.component('banner', banner);
app.component('sidemenu', sidemenu);
app.mount('#app');
