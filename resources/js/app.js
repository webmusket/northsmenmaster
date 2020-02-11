
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


window.Vue = require('vue');


import axios from 'axios'

import VueAxios from 'vue-axios'

import VueToast from 'vue-toast-notification'
import 'vue-toast-notification/dist/index.css'
// add these before Vue is instantiated


// window.$  = require('jquery');
// import jQuery from "jquery";
// const $ = jQuery;
// window.$ = $;

Vue.use(VueAxios,axios)
Vue.use(VueToast, {
  // One of options
  position: 'bottom-right',
  duration: 1000,
  
});


import VueRouter from 'vue-router'

Vue.use(VueRouter)


import {routes} from './routes';


import VueFroala from 'vue-froala-wysiwyg'
Vue.use(VueFroala)

// import Vue from 'vue'
// import axios from 'axios'
// import VueAxios from 'vue-axios'

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('products', require('./components/Products.vue').default);

Vue.component('customization', require('./components/Customization.vue').default);

Vue.component('pagination', require('laravel-vue-pagination'));

Vue.component('progressbar', require('./components/Progress.vue').default);

Vue.component('cart', require('./components/Cart.vue').default);

Vue.component('notification', require('./components/Notification.vue').default);

Vue.component('shipping', require('./components/Shipping.vue').default);

Vue.component('profile', require('./components/Profile.vue').default);

Vue.component('home', require('./components/home/Home.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const router = new VueRouter({
    routes, // short for `routes: routes`
    mode:'hash',

})


const app = new Vue({
    el: '#app',
    router,
});
