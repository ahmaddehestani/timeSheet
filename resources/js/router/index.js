import { createWebHistory, createRouter } from "vue-router";
import Dashboard from "../../vue/views/DashBoard.vue";
import "../../sass/app.scss";
import Register from "../../vue/views/Register.vue";
import Login from "../../vue/views/Login.vue";
import ForgetPass from "../../vue/views/ForgetPass.vue";
import Test from "../../vue/views/Test.vue";

import axios from "axios";

const routes = [
    {
        path: "/",
        name: "Dashboard",
        component: Dashboard,
    },
    {
        path: "/login",
        name: "login",
        component: Login,
    },
    {
        path: "/register",
        name: "register",
        component: Register,
    },
    {
        path: "/forgetPass",
        name: "forgetPass",
        component: ForgetPass,
    },
    {
        path: "/test",

        component: Test,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
