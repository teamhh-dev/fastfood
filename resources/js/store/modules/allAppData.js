import axios from "axios";
import { event } from "jquery";

const state = {
    categoriesWithData: [],
    // categoryTitle: ''


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
    },
    addCategory(event) {

        $.ajax({
            type: "POST",
            url: "/api/category/create",
            data: { title: $("#title").val() },
            success: function(response) {
                console.log(response);
                console.log(event);
                $("#title").val("");
                $(".notification").show().children('.msg').html('Added Succesfully!').parent().fadeOut(3000);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR, " ", textStatus, " ", errorThrown);
            }
        });

    },
    setTitle({ commit }, value) {
        commit('setcategoryTitle', value)

    }

};
const getters = {
    allAppData: (state) => state.categoriesWithData,
    categoryTitle: (state) => state.categoryTitle,

};
const mutations = {
    setAllAppData: (state, appAppData) => (state.categoriesWithData = appAppData),
    setcategoryTitle: (state, categoryTitle) => (state.categoryTitle = categoryTitle)
};

export default {
    state,
    actions,
    getters,
    mutations
};