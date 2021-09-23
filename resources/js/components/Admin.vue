<template>
    <dashboard></dashboard>
    <router-view/>

</template>

<script>
import dashboard from "../components/Dashboard.vue";

export default {
    name:'admin',
components:
    {
        dashboard
    }
}
</script>

<style>

</style>