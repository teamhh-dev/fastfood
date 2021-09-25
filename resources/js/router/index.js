import { createRouter, createWebHashHistory, createWebHistory } from "vue-router";
import home from "../components/Home.vue";
import about from "../components/About.vue";
import dashboard from "../components/Dashboard.vue";
import addCategory from "../components/AddCategory.vue";
import updateCategory from "../components/UpdateCategory.vue";
import deleteCategory from "../components/DeleteCategory.vue";
import admin from "../components/Admin.vue";

let routes = [
    { path: '/', name: 'Home', component: home },
    { path: '/about', name: 'About', component: about },
    { path: '/admin/addCategory', name: 'addCategory', component: addCategory },
    { path: '/admin/updateCategory', name: 'updateCategory', component: updateCategory },
    { path: '/admin/deleteCategory', name: 'deleteCategory', component: deleteCategory },
    { path: '/admin', name: 'Admin', component: admin },
];

const router = createRouter({
    // mode: 'history',
    history: createWebHistory(process.env.BASE_URL),
    // base: process.env.BASE_URL,
    routes, // short for `routes: routes`
});



export default router;