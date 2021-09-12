import axios from "axios";

const state = {
    categoriesWithData: []
};
const actions = {
    async getAllData({ commit }) {
        const response = await axios.get("/api/category/allProducts");
        // await $.ajax({
        //     type: "get",
        //     url: "http://127.0.0.1:8000/api/category/allProducts",
        //     // data: "data",
        //     // dataType: "dataType",
        //     success: function(response) {
        console.log(response.data);
        commit('setAllAppData', response.data);
        // this.state.categoriesWithData = response.data;
        //     }
        // });
    }
};
const getters = {
    allAppData: (state) => state.categoriesWithData
};
const mutations = {
    setAllAppData: (state, appAppData) => (state.categoriesWithData = appAppData)
};

export default {
    state,
    actions,
    getters,
    mutations
};