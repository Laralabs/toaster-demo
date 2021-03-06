
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import Notifications from 'vue-notification';
import velocity from 'velocity-animate';

Vue.use(Notifications, { velocity });
Vue.component('toaster-group', require('laralabs-vue-toaster/src/ToasterGroupComponent.vue'));
Vue.component('toaster-logic', require('laralabs-vue-toaster/src/ToasterLogicComponent.vue'));

let app = new Vue({
    el: '#app',
    data: {
        toaster: {
            data: toaster.data
        }
    },
});
