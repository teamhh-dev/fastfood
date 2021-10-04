<template>
  <product PageType="Add" ButtonType="Add" ShowInput IsUpdate />
</template>

<script>
import product from "./Product.vue";
export default {
  name: "addProduct",
  components: {
    product,
  },
};
</script>

