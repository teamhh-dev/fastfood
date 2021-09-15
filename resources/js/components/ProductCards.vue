<template>
  <section v-for="category in allAppData" :key="category.id">
    <fieldset class="heading">
      <legend>{{ category.title }}</legend>
    </fieldset>
    <div class="cards-container" >
      <card v-for="product in category.products" :key="product.id"  v-bind:product="product"  ></card>
    </div>
    
  </section>
</template>

<script>
import card from "./Card.vue";
export default {
  name: "productCards",
  props: ["allAppData"],
  components:
  {
    card
  }
};
</script>

