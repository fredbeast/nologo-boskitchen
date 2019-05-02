import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from '../js/pages/Home.vue';
import About from '../js/pages/About.vue';
import Recipe from '../js/pages/Recipe.vue';
import Search from '../js/pages/Search.vue';
import Feedback from '../js/pages/Feedback.vue';
import MyKitchen from '../js/pages/MyKitchen.vue';
import Install from '../js/pages/Install.vue';
import PageNotFound from '../js/pages/PageNotFound.vue';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/about',
            name:'about',
            component: About
        },
        {
            path: '/recipe/:id',
            name: 'recipe',
            component: Recipe
        },
        {
            path: '/search',
            name: 'search',
            component: Search,
            props: (route) => ({query: route.query.type})
        },
        {
            path: '/feedback',
            name: 'feedback',
            component: Feedback
        },
        {
            path: '/kitchen',
            name: 'kitchen',
            component: MyKitchen
        },
        {
            path: '/install',
            name: 'install',
            component: Install
        },
        { path: "*", component: PageNotFound }

    ],
    scrollBehavior (to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition
        } else {
            return { x: 0, y: 0 }
        }
    }});

export default router;