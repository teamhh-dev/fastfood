<template>
    <nav class="side-nav">
        <div class="nav-item">
            <div class="nav-item-main">
                <img
                    src="/images/icons8_home_26px_1.png"
                    alt=""
                    class="nav-icon"
                />
                <!-- <a href="#pizza" class="nav-link">Home</a> -->
                <router-link :to="{ name: 'Home' }" class="nav-link"
                    >Dashboard</router-link
                >
                <!-- <button @click="toggle"><img src="/images/icons8_expand_arrow_24px_1.png" alt="" class="nav-icon" /></button> -->
            </div>
            <!-- <div class="sub-nav-item">
                <li class="sub-item-link">a</li>
                <li class="sub-item-link">b</li>
                <li class="sub-item-link">c</li>
            </div> -->
        </div>
        <div class="nav-item">
            <div class="nav-item-main">
                <img
                    src="/images/icons8_category_30px.png"
                    alt=""
                    class="nav-icon"
                />
                <!-- <a href="#pizza" class="nav-link">Home</a> -->
                <router-link :to="{ name: 'Home' }" class="nav-link"
                    >Category</router-link
                >
                <button @click="toggle">
                    <img
                        src="/images/icons8_expand_arrow_24px_1.png"
                        alt=""
                        class="nav-icon"
                    />
                </button>
            </div>
            <div class="sub-nav-item">
                <router-link :to="{ name: 'addCategory' }" class="sub-item-link"
                    >Add</router-link
                >
                <router-link :to="{ name: 'updateCategory' }" class="sub-item-link"
                    >Update</router-link
                >
                <router-link :to="{ name: 'deleteCategory' }" class="sub-item-link"
                    >Delete</router-link
                >
                <!-- <li class="sub-item-link">Update</li>
                <li class="sub-item-link">Delete</li> -->
            </div>
        </div>
        <div class="nav-item">
            <div class="nav-item-main">
                <img
                    src="/images/icons8_prototype_30px_1.png"
                    alt=""
                    class="nav-icon"
                />
                <!-- <a href="#pizza" class="nav-link">Home</a> -->
                <router-link :to="{ name: 'Home' }" class="nav-link"
                    >Product</router-link
                >
                <button @click="toggle">
                    <img
                        src="/images/icons8_expand_arrow_24px_1.png"
                        alt=""
                        class="nav-icon"
                    />
                </button>
            </div>
            <div class="sub-nav-item">
                <li class="sub-item-link">Add</li>
                <li class="sub-item-link">Update</li>
                <li class="sub-item-link">Delete</li>
            </div>
        </div>
        <div class="nav-item">
            <div class="nav-item-main">
                <img
                    src="/images/icons8_category_30px.png"
                    alt=""
                    class="nav-icon"
                />
                <!-- <a href="#pizza" class="nav-link">Home</a> -->
                <router-link :to="{ name: 'Home' }" class="nav-link"
                    >Working</router-link
                >
                <button @click="toggle">
                    <img
                        src="/images/icons8_expand_arrow_24px_1.png"
                        alt=""
                        class="nav-icon"
                    />
                </button>
            </div>
            <div class="sub-nav-item">
                <li class="sub-item-link">Add</li>
                <li class="sub-item-link">Update</li>
                <li class="sub-item-link">Delete</li>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    name: "dashboardNavbar",
    methods: {
        toggle(event) {
            $(".sub-nav-item")
                .not(
                    $(event.target).parent().parent().siblings(".sub-nav-item")
                )
                .fadeOut(150);

            console.log($(event.target));
            $(event.target)
                .parent()
                .parent()
                .siblings(".sub-nav-item")
                .fadeToggle(150);
            $("button").addClass("flip");
            $(event.target).parent().toggleClass('flip');
           
        },
    },
    mounted() {
        $("button").addClass("flip");
        $(".sub-nav-item").fadeOut();
    },
};
</script>

<style scoped>
.side-nav {
    height: 100vh;
    overflow: auto;
    width: 25%;
    background-color: maroon;
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    justify-items: center;
    padding: 0.3rem;
}
.nav-item {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: space-around;
    height: fit-content;
    width: 100%;
    /* padding: 2rem; */
}
.nav-item:hover .nav-item-main {
    background-color: rgb(85, 0, 0) !important;
}
.nav-icon {
    justify-self: self-end;
    /* margin-right: 1rem; */
}
.nav-item-main {
    width: 100%;
    padding: 1.3rem 2rem;
    display: grid;
    grid-template-columns: 40% 50% 10%;
    align-items: center;
}
.nav-item .nav-item-main > a {
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    font-weight: bold;
    font-size: 1.7rem;
    color: white;
    margin-left: 1.4rem;
    /* padding: 0.3rem; */
    text-decoration: none;
}
.sub-nav-item {
    width: 70%;
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    align-items: center;
    justify-items: center;
    background-color: rgb(68, 8, 0);
    border-radius: 0.9rem;
    box-shadow: 0px 0px 3px white;
    margin: 0.2rem 0.3rem;
}
button {
    border: none;
    color: inherit;
    background-color: inherit;
    display: flex;
    align-items: center;
    justify-content: center;
}
/* button:hover
{
    transform: rotate(180deg);
} */
li {
    list-style: none;
}
.sub-item-link {
    color: #ff900d;
    /* padding-left: 8rem; */
    font-size: 1.5rem;
    line-height: 3rem;
    text-decoration: none;
}
.flip {
    transform: rotate(-180deg);
}
</style>
