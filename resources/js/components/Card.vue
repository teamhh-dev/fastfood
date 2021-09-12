<template>
   <li v-for="category in allAppData" :key="category.id">
        <fieldset class="heading">
          <legend>{{ category.title }}</legend>
        </fieldset>
        <ul>
          <li v-for="product in category.products" :key="product.id">
            <ul>
              <li>{{ product.title }}</li>
              <li>{{ product.desc }}</li>
              <li>{{ product.image }}</li>

              <ul>
                <li v-for="size in product.sizes" :key="size.id">
                  <ul>
                    <li>{{ size.title }}</li>
                    <li>{{ size.measure }}</li>
                    <li>{{ size.unit }}</li>
                  </ul>
                </li>
              </ul>
            </ul>
          </li>
        </ul>
      </li>
</template>

<script>
export default {
    name:"card",
    props:['allAppData']
}
</script>

<style scoped>
.heading legend,
h1 {
  font-family: "Tangerine", -apple-system, BlinkMacSystemFont, "Segoe UI",
    Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
  font-size: 5rem;
  text-align: center;
  margin-top: 1rem;
  padding: 0 1rem;
}
.heading {
  border: none;
  border-top: 2px solid #ddd;
  text-align: center;
}
ul li {
  list-style: none;
}

</style>