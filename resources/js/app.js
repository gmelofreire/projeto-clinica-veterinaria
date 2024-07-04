import { createApp } from 'vue';
import Cabecalho from './components/estrutura/Cabecalho.vue';
import Banner from './components/Banner.vue';
import Exames from './components/Exames.vue';
import AvaliacoesIndex from './components/AvaliacoesIndex.vue';

const app = createApp();

app.component('cabecalho', Cabecalho);
app.component('banner', Banner);
app.component('exames', Exames);
app.component('avaliacoesindex', AvaliacoesIndex);

app.mount('#app');