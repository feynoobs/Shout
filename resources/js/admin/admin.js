import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import { createApp } from 'vue';
import { Banner } from './Banner';

const app = createApp({}).mount('#app');
app.component('Banner', Banner);
