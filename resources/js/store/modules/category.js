import axios from "axios";

const state = {
    categoryTitle: ''


};
const actions = {

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
    updateCategory() {

    },
    setTitle({ commit }, value) {
        console.log(value);
        // commit('setcategoryTitle', value)

    },


};
const getters = {
    getCategoryTitle: (state) => state.categoryTitle,

};
const mutations = {
    setCategoryTitle: (state, categoryTitle) => (state.categoryTitle = categoryTitle)
};

export default {
    state,
    actions,
    getters,
    mutations
};