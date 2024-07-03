import './bootstrap';
import { createApp } from 'vue';
import Cabecalho from './components/estrutura/Cabecalho.vue';
import Banner from './components/Banner.vue';
import Exames from './components/Exames.vue';

const app = createApp();

app.component('cabecalho', Cabecalho);
app.component('banner', Banner);
app.component('exames', Exames);

app.mount('#app');