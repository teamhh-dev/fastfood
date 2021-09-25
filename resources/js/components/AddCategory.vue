<template>
  <dashboardNavbar />
  <div class="notification" style="display:none;position: fixed;top:10%;left:50%"><h3 class="msg"></h3></div>
  <div class="container-add">
    <form @submit.prevent="addCategory">
      <fieldset class="form-field">
        <legend><h1>Add Category</h1></legend>
        <div class="input-container">
          <label for="title" class="title-label">Category Title: </label>
          <input
            type="text"
            id="title"
            name="title"
            placeholder="Enter Title.."
            v-model="categoryTitle"
          />
          <h1>{{categoryTitle}}</h1>
          <div class="error-msg"><h2>Invalid Data</h2></div>
        </div>
        <button class="card-button" style="width: 30%">Add</button>
      </fieldset>
    </form>
  </div>
</template>

<script>
import dashboardNavbar from "../components/DasboardNavbar.vue";
// import store from "../store";
import { mapActions,mapGetters,mapState} from "vuex";
export default {
  name: "addCategory",
  components: {
    dashboardNavbar,
  },
  computed:{
    // ...mapState(['categoryTitle']),
    categoryTitle: {
        get() {
            return this.$store.getters.getCategoryTitle;
        },
        set(value) {
            this.$store.commit('setCategoryTitle', value);
        }
    }
  },
  methods: {
    ...mapActions(["addCategory","setTitle"]),
  },
  // methods: {
  //   submit(event) {
  //     console.log($(event.target).find("#title").val());
  //   },
  // },
};
</script>

