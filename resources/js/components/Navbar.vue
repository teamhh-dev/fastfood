<template>
  <div class="navbar">
        <!-- <div class="nav-item">
            <img src="./images/home-solid.svg" alt="" class="nav-icon">

            <a href="/" class="nav-link">Home</a>
        </div> -->
        <div class="nav-item">
            <img src="/images/icons8_home_26px_1.png" alt="" class="nav-icon">
            <!-- <a href="#pizza" class="nav-link">Home</a> -->
            <router-link :to="{name:'Home'}" class="nav-link">Home</router-link>
        </div>
        <div class="nav-item">
            <img src="/images/icons8_about_26px.png" alt="" class="nav-icon">

            <!-- <a href="#burger" class="nav-link">About</a> -->
            <router-link :to="{name:'About'}" class="nav-link">About</router-link>

        </div>
        <div class="nav-item">
            <img src="/images/icons8_comments_24px_2.png" alt="" class="nav-icon">

            <!-- <a href="" class="nav-link">Feedback</a> -->
            <router-link :to="{name:'Admin'}" class="nav-link">Admin</router-link>

        </div>
        <div class="nav-item">
            <img src="/images/icons8_add_shopping_cart_30px.png" alt="" class="nav-icon">
            <a href="" class="nav-link">My Cart!</a>
        </div>

    </div>
</template>

<script>
export default {
    name:'navbar'
}
</script>

