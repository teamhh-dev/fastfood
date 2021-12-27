<template>
    <select name="category" id="category_id" v-model="selectedCategory">
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
        selectedCategory:
        {
            get()
            {
                return this.$store.getters.getSelectedCategory;
            }
            ,set(value) {
                this.$store.commit("setSelectedCategory", value);
            }
        },
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
