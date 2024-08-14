import './bootstrap';
import { createApp } from 'vue';
import Cabecalho from './components/estrutura/Cabecalho.vue';
import Banner from './components/Banner.vue';
import Exames from './components/Exames.vue';
import AvaliacoesIndex from './components/AvaliacoesIndex.vue';
import Faq from './components/Faq.vue';
import Rodape from './components/estrutura/Rodape.vue';
import BannerPagina from './components/estrutura/BannerPagina.vue';
import Funcionarios from './components/Funcionarios.vue';
import AvaliacoesGaleria from './components/AvaliacoesGaleria.vue';
import Login from './components/login/Login.vue';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const app = createApp();

app.component('cabecalho', Cabecalho);
app.component('banner', Banner);
app.component('exames', Exames);
app.component('avaliacoesindex', AvaliacoesIndex);
app.component('faq', Faq);
app.component('rodape', Rodape);
app.component('banner-pagina', BannerPagina);
app.component('funcionarios', Funcionarios);
app.component('avaliacoesGaleria', AvaliacoesGaleria);
app.component('login', Login);

app.mount('#app');