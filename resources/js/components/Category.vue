<template>
  <dashboardNavbar />
  <div
    class="notification"
    style="display: none; position: fixed; top: 10%; left: 50%"
  >
    <h3 class="msg"></h3>
  </div>
  <div class="container-add">
    <form @submit.prevent="checkAndExecute">
      <fieldset class="form-field">
        <legend>
          <h1>{{ PageType }}&nbsp;Category</h1>
        </legend>
        <div class="input-container"  v-if="IsUpdate">
          <label for="title" class="title-label">Select Title: </label>

          <select>
            <option
              :value="category.title"
              v-for="category in categories"
              :key="category.id"
              
              :id="category.id"
            >
              {{ category.title }}
            </option>
          </select>
        </div>
        <div class="input-container" v-if="ShowInput">
          <label for="title" class="title-label">Category Title: </label>
          <input
            type="text"
            id="title"
            name="title"
            placeholder="Enter Title.."
            v-model="categoryTitle"
            @focus="clearError"
          />
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
import dashboardNavbar from "./DasboardNavbar.vue";
import { mapActions, mapGetters } from "vuex";
export default {
  name: "category",
  props: { PageType: String, ButtonType: String,IsUpdate:Boolean ,ShowInput:Boolean},
  components: {
    dashboardNavbar,
  },

  methods: {
    ...mapActions(["clearError", "getAllData","checkAndExecute"]),
  },
  computed: {
    // ...mapGetters["allAppData"],

    categories: {
      get() {
        return this.$store.getters.allAppData;
      },
      set(value) {
        this.$store.commit("setAllAppData", value);
      },
    },
    categoryTitle: {
      get() {
        return this.$store.getters.getCategoryTitle;
      },
      set(value) {
        this.$store.commit("setCategoryTitle", value);
      },
    },
  },
  mounted() {
    // ...mapGetters["allAppData"],
    //   categories=allAppData
    this.getAllData();
    // console.log(allAppData);
  },

  
};
</script>

<style scoped>
  select
  {
    width: 80%;
  }
</style>
