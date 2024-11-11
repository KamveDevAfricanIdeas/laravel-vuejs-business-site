import './bootstrap';
import '../css/app.css';
import { createApp } from 'vue';

const app = createApp({});

import Navbar from './components/Navbar.vue';
import Footer from './components/Footer.vue';
import SearchBar from './components/SearchComponent.vue';

app.component('navbar', Navbar);
app.component('footer_component', Footer);
app.component('searchbar', SearchBar);

app.mount('#app');