<template>
    <select name="product" id="product_id" v-model="selectedProduct">
        <option
            v-for="product in Products"
            :key="product.id"
            :id="product.id"
        >
            {{ product.title }}
        </option>
    </select>
</template>

<script>
import { mapActions, mapGetters } from "vuex";

export default {
    name: "productSelector",
    methods: {
        ...mapActions(["fetchProducts"]),
    },
    computed: {
        // ...mapGetters["allAppData"],
        selectedProduct:
        {
            get()
            {
                return this.$store.getters.getSelectedProduct;
            }
            ,set(value) {
                this.$store.commit("setSelectedProduct", value);
            }
        },

        Products: {
            get() {
                return this.$store.getters.getProducts;
            },
            set(value) {
                this.$store.commit("setProducts", value);
            },
        },
    },
    created() {
        // ...mapGetters["allAppData"],
        //   Products=allAppData
        this.fetchProducts();
        // console.log(allAppData);
    },
};
</script>

<style></style>
