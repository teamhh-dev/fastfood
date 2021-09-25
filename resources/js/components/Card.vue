<template>
    <div class="card" :id="product.id">
        <div class="card-left">
            <img src="\images\1626695679-Ny-FuXion.png" class="card-img" />
        </div>
        <div class="card-right">
            <p class="product-price">
                {{
                    product.sizes.length !== 0
                        ? "Starting at Rs." + product.sizes[0].price.price
                        : "No Product"
                }}
            </p>
            <p class="card-title">{{ product.title }}</p>
            <p class="card-desc">{{ product.desc }}</p>
            <form method="post">
                <div class="card-sizes">
                    <label
                        for="sizes"
                        class="card-title"
                        style="font-size: 1.5rem; color: yellowgreen"
                        >Pick Size</label
                    >
                    <select id="sizes">
                        <option disabled value="">-----</option>
                        <option
                            :value="size.id"
                            :id="size.id"
                            v-for="size in product.sizes"
                            :key="size.id"
                        >
                            {{
                                size.title[0] +
                                " " +
                                size.measure +
                                " " +
                                size.unit +
                                " at Rs." +
                                size.price.price
                            }}
                        </option>
                    </select>
                    
                </div>
                <button class="card-button" @click="log" type="submit">
                    Add To Cart
                </button>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    name: "card",
    props: {
        product: Object,
        // size
    },
    methods: {
        log(event) {
            event.preventDefault();
            console.log("ok", event);
        },
    },
};
</script>
