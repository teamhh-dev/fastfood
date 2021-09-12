// import Vue from 'vue';
import { createStore } from 'vuex';
import allAppData from './modules/allAppData';

// Vue.use
// Vue.use(Vuex);
// Vue.


const store = createStore({
    modules: {
        allAppData
    }
});

export default store;