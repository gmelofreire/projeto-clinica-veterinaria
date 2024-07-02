import './bootstrap';
import { createApp } from 'vue';
import Cabecalho from './components/estrutura/Cabecalho.vue';
import Banner from './components/Banner.vue';

const app = createApp();

app.component('cabecalho', Cabecalho);
app.component('banner', Banner);

app.mount('#app');