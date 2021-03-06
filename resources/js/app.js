
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


window.Vue = require('vue');


window.axios = require('axios');

//... configure axios...

Vue.prototype.$http = window.axios;

// Hook up Bootstrap extension
import BootstrapVue from 'bootstrap-vue';
Vue.use(BootstrapVue);

// Bootstrap Vue extension
import 'bootstrap-vue/dist/bootstrap-vue.css';

// Add Infinite Scroll plugin
import infiniteScroll from 'vue-infinite-scroll';
Vue.use(infiniteScroll);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('recipe-card', require('./components/RecipeCard.vue').default);
Vue.component('navbar', require('./components/TheNavbar.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import router from './routes.js';
import App from './views/App.vue';

Vue.filter('capitalize', function (value) {
    if (!value) return '';
    value = value.toString();
    return value.charAt(0).toUpperCase() + value.slice(1);
});

Vue.filter('allcaps', function (value) {
    if (!value) return ''
    value = value.toString();
    return value.toUpperCase();
});



const app = new Vue({
    el: '#app',
    components: {
        App
    },
    router,
    render: h => h(App)
});

// Register Page View
router.afterEach(( to, from ) => {
    gtag('config', 'UA-137560119-1', {
        'page_path': to.path
    });
});

if ('serviceWorker' in navigator ) {
    window.addEventListener('load', function() {
        navigator.serviceWorker.register('/service-worker.js').then(function(registration) {
            // Registration was successful
            console.log('ServiceWorker registration successful with scope: ', registration.scope);
        }, function(err) {
            // registration failed :(
            console.log('ServiceWorker registration failed: ', err);
        });
    });
}