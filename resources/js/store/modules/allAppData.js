import axios from "axios";

const state = {
    categoriesWithData: [],


};
const actions = {
    async getAllData({ commit }) {
        const response = await axios.get("/api/category/allProducts");
        console.log(response.data);
        commit('setAllAppData', response.data);
    },
};
const getters = {
    allAppData: (state) => state.categoriesWithData,

};
const mutations = {
    setAllAppData: (state, appAppData) => (state.categoriesWithData = appAppData),
};

export default {
    state,
    actions,
    getters,
    mutations
};