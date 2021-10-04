<template>
  <dashboardNavbar />
  <div
    class="notification"
    style="display: none; position: fixed; top: 10%; left: 50%"
  >
    <h3 class="msg"></h3>
  </div>
  <div class="container-add">
    <form @submit.prevent="checkAndExecuteForProduct">
      <fieldset class="form-field">
        <legend>
          <h1>{{ PageType }}&nbsp;Product</h1>
        </legend>
        <div class="input-container" v-if="IsUpdate">
          <label for="title" class="title-label">Select Category: </label>

          <!-- <select name="category" id="category_id">
            <option v-for="category in categories" :key="category.id" :id="category.id">
              {{ category.title }}
            </option>
          </select> -->
          <categorySelector />
        </div>
        <div class="input-container" v-if="IsUpdate">
          <label for="product" class="title-label">Select Product: </label>

          <!-- <select name="category" id="category_id">
            <option v-for="category in categories" :key="category.id" :id="category.id">
              {{ category.title }}
            </option>
          </select> -->
          <productSelector />
        </div>
        <div class="input-container" v-if="ShowInput">
          <label for="title" class="title-label">Enter Product Title: </label>
          <input
            type="text"
            id="title"
            name="title"
            placeholder="Enter Title.."
          />
          <div class="error-msg"><h2>Invalid Data</h2></div>
        </div>
        <div class="input-container" v-if="ShowInput">
          <label for="title" class="title-label">Enter Product Description: </label>
          <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter Product Description..."></textarea>
          <div class="error-msg"><h2>Invalid Data</h2></div>
        </div>
        <div class="input-container" v-if="ShowInput">
          <label for="title" class="title-label">Select Image: </label>
          <input type="file" id="image" name="image" accept="image/*">
          <div class="error-msg"><h2>Invalid Data</h2></div>
        </div>
      

        <button class="card-button" style="width: 30%" type="submit">
          {{ ButtonType }}
        </button>
      </fieldset>
    </form>
  </div>
</template>

<script>
import dashboardNavbar from "../DasboardNavbar.vue";
import categorySelector from "../Selectors/CategorySelector.vue";
import productSelector from "../Selectors/ProductSelector.vue";
import { mapActions, mapGetters } from "vuex";
export default {
  name: "product",
  props: {
    PageType: String,
    ButtonType: String,
    IsUpdate: Boolean,
    ShowInput: Boolean,
  },
  components: {
    dashboardNavbar,
    categorySelector,productSelector
  },

  methods: {
    ...mapActions(["checkAndExecuteForProduct"]),
  },
  // computed: {
  //   // ...mapGetters["allAppData"],

  //   categories: {
  //     get() {
  //       return this.$store.getters.getCategories;
  //     },
  //     set(value) {
  //       this.$store.commit("setCategories", value);
  //     },
  //   },
  // },
  // mounted() {
  //   // ...mapGetters["allAppData"],
  //   //   categories=allAppData
  //   this.fetchCategories();
  //   // console.log(allAppData);
  // },
};
</script>

<style scoped>
select {
  width: 80%;
}
</style>
