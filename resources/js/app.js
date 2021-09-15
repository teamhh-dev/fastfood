import { createApp } from 'vue';
import VueRouter from "vue-router";
import App from './components/App.vue'
import store from './store';

const app = createApp(App);
app.use(store);
app.use(VueRouter);
app.mount("#app");
// createApp(App).mount("#app")