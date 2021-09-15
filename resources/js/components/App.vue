<template>

  <navbar></navbar>
  <div class="light-box"></div>
  <div class="container">
    <!-- <h1>ok</h1> -->
    
    <productCards v-bind:allAppData="allAppData"></productCards>
  </div>
</template>

<script>
import navbar from "./Navbar.vue";
import productCards from "./ProductCards.vue";
import axios from "axios";
import { mapGetters, mapActions } from "vuex";
export default {
  // data:
  // {
  //   categories:[]
  // },
  computed: {
    ...mapGetters(["allAppData"]),
  },
  methods: {
    ...mapActions(["getAllData"]),
  },
  mounted() {
    this.getAllData();
    // console.log(this.getAllData(), "ok");
  },
  // mounted() {
  //   // this.categories=this.allAppData;
  // },
  components: {navbar,productCards},
};
</script>


