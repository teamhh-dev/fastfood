const state = {
    products: [],
    selectedProduct: '',

};
const actions = {
    fetchCategories({ commit }) {
        $.ajax({
            type: "GET",
            url: "/api/category/all",
            success: function(response) {
                commit("setCategories", JSON.parse(response));
            },
        });
    },
    fetchProducts({ commit }) {
        $.ajax({
            type: "GET",
            url: "/api/product/all",
            success: function(response) {
                commit("setProducts", JSON.parse(response));
            },
        });
    },
    addProduct({ commit }) {

        console.log($('#category_id option:selected').attr('id'), $("#title").val(), $("#desc").val());
        $.ajax({
            type: "POST",
            url: "/api/product/create",
            data: { category_id: $('#category_id option:selected').attr('id'), title: $("#title").val(), desc: $("#desc").val(), image: "/images/arrow-up-solid.svg" },
            success: function(response) {
                $(".notification").show().children('.msg').html('Added Succesfully!').parent().fadeOut(5000);

            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR, " ", textStatus, " ", errorThrown);
                $(".notification").show().css('backgroud-color', 'lightred').children('.msg').html('Error Adding!').parent().fadeOut(5000);

            }
        });
    },
    updateProduct({ commit, getters, dispatch }) {
        dispatch('getAllData');
        console.log(getters.allAppData);
        let products = getters.allAppData.filter((value) => { value.title == getters.getSelectedCategory });
        console.log(products);
    },
    checkAndExecuteForProduct({ commit, dispatch, getters }) {
        if ($('.card-button').html() === 'Update') {
            dispatch('updateProduct');
        } else if ($('.card-button').html() === 'Add') {
            dispatch('addProduct');

        } else if ($('.card-button').html() === 'Delete') {
            dispatch('addProduct');
        }
    }
};
const getters = {
    getProducts: (state) => state.products,
    getSelectedProduct: (state) => state.selectedProduct,
};
const mutations = {
    setProducts: (state, products) => (state.products = products),
    setSelectedProduct: (state, selectedProduct) => (state.selectedProduct = selectedProduct),
};

export default {
    state,
    actions,
    getters,
    mutations,
};