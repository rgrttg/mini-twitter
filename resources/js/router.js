import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path: "/",
        component: () => import("./pages/Home.vue"),
    },
    {
        path: "/test",
        component: () => import("./pages/Test.vue"),
    },
    // Für alle Tweets
    {
        path: "/all",
        component: () => import("./pages/All.vue"),
    },
    // Für einen neuen Tweet
    {
        path: "/new",
        component: () => import("./pages/New.vue"),
    },
    // Für einen einzelnen Tweet
    // eventuell wird noch eine id gebraucht
    {
        // auch möglich z.B. "/tweet/:id/:category"
        path: "/tweet/:id",
        component: () => import("./pages/Single.vue"),
    },
    // Um einen Tweet zu edieren
    // eventuell wird noch eine id gebraucht
    {
        path: "/edit",
        component: () => import("./pages/Edit.vue"),
    },
];

export default createRouter({
    history: createWebHistory(),
    routes,
});