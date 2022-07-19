/*
import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
*/

import { createApp } from 'vue';
import banner from './banner.vue';
const app = createApp({});
app.component('my-banner', banner);
app.mount('#app');
