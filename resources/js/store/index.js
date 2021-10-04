// import Vue from 'vue';
import { createStore } from 'vuex';
import allAppData from './modules/allAppData';
import category from './modules/category';
import product from "./modules/product";

// Vue.use
// Vue.use(Vuex);
// Vue.


const store = createStore({
    modules: {
        allAppData,
        category,
        product
    }
});

export default store;