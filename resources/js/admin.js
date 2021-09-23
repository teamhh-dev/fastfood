import { createApp } from 'vue';
// import VueRouter from "vue-router";
import router from "./router";
import App from './components/App.vue'
import store from './store';

const app = createApp(App);
app.use(store);
app.use(router);
app.mount("#app2");
// createApp(App).mount("#app")