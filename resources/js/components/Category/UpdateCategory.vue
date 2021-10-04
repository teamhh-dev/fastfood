<template>
  <category
    PageType="Update"
    ButtonType="Update"
    IsUpdate
    ShowInput
  />
</template>

<script>
import category from "./Category.vue";
export default {
  name: "updateCategory",

  components: {
    category,
  },
  mounted() {
    this.$store.commit("setCategoryTitle", "");
  },
};
</script>

