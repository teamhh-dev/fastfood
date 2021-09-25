import axios from "axios";

const state = {
    categoryTitle: '',

};
const actions = {

    addCategory({ commit, getters }) {
        if (getters.getCategoryTitle === '') {
            $(".error-msg").show();
            return;
        }
        $.ajax({
            type: "POST",
            url: "/api/category/create",
            data: { title: getters.getCategoryTitle },
            success: function(response) {
                console.log(response);
                commit('setCategoryTitle', "");
                $(".notification").show().children('.msg').html('Added Succesfully!').parent().fadeOut(5000);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR, " ", textStatus, " ", errorThrown);
                $(".notification").show().css('backgroud-color', 'lightred').children('.msg').html('Error Adding!').parent().fadeOut(5000);

            }
        });

    },
    updateCategory({ commit, getters, dispatch }) {
        console.log("ok", $('select').first().find(':selected').attr('id'));
        if (getters.getCategoryTitle === '') {
            $(".error-msg").show();
            return;
        }
        $.ajax({
            type: "PUT",
            url: "/api/category/update",
            data: { id: $('select').first().find(':selected').attr('id'), title: getters.getCategoryTitle },
            success: function(response) {
                console.log(response);
                commit('setCategoryTitle', "");
                $(".notification").show().children('.msg').html('Updated Succesfully!').parent().fadeOut(5000);
                dispatch('getAllData');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR, " ", textStatus, " ", errorThrown);
                $(".notification").show().css('backgroud-color', 'lightred').children('.msg').html('Error Updating!').parent().fadeOut(5000);

            }
        });

    },
    deleteCategory({ commit, getters, dispatch }) {
        console.log("ok", $('select').first().find(':selected').attr('id'));

        $.ajax({
            type: "DELETE",
            url: "/api/category/delete",
            data: { id: $('select').first().find(':selected').attr('id') },
            success: function(response) {
                console.log(response);
                $(".notification").show().children('.msg').html('Deleted Succesfully!').parent().fadeOut(5000);
                dispatch('getAllData');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR, " ", textStatus, " ", errorThrown);
                $(".notification").show().css('backgroud-color', 'lightred').children('.msg').html('Error Updating!').parent().fadeOut(5000);

            }
        });

    },
    checkAndExecute({ commit, dispatch, getters }) {
        // console.log(e);
        console.log($('.card-button').html());

        if ($('.card-button').html() === 'Update') {
            dispatch('updateCategory');
        } else if ($('.card-button').html() === 'Add') {
            dispatch('addCategory');

        } else if ($('.card-button').html() === 'Delete') {
            dispatch('deleteCategory');
        }
    },
    clearError() {
        $(".error-msg").hide();

    }

};
const getters = {
    getCategoryTitle: (state) => state.categoryTitle,

};
const mutations = {
    setCategoryTitle: (state, categoryTitle) => (state.categoryTitle = categoryTitle),
};

export default {
    state,
    actions,
    getters,
    mutations
};