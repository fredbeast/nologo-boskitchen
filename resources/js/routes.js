import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from '../js/pages/Home.vue';
import About from '../js/pages/About.vue';
import Recipe from '../js/pages/Recipe.vue';
import Search from '../js/pages/Search.vue';

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
        }

    ]
});

export default router;