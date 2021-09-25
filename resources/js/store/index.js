// import Vue from 'vue';
import { createStore } from 'vuex';
import allAppData from './modules/allAppData';
import category from './modules/category';

// Vue.use
// Vue.use(Vuex);
// Vue.


const store = createStore({
    modules: {
        allAppData,
        category
    }
});

export default store;