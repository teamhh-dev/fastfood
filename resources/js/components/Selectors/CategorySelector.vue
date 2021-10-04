<template>
    <select name="category" id="category_id">
        <option
            v-for="category in categories"
            :key="category.id"
            :id="category.id"
        >
            {{ category.title }}
        </option>
    </select>
</template>

<script>
import { mapActions, mapGetters } from "vuex";

export default {
    name: "categorySelector",
    methods: {
        ...mapActions(["fetchCategories"]),
    },
    computed: {
        // ...mapGetters["allAppData"],

        categories: {
            get() {
                return this.$store.getters.getCategories;
            },
            set(value) {
                this.$store.commit("setCategories", value);
            },
        },
    },
    created() {
        // ...mapGetters["allAppData"],
        //   categories=allAppData
        this.fetchCategories();
        // console.log(allAppData);
    },
};
</script>

<style></style>
