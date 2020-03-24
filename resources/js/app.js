require('./bootstrap');
require('../../node_modules/bootstrap-vue/dist/bootstrap-vue');

import Vue from 'vue'
import VueRouter from 'vue-router'

import App from './components/App'
import Home from './components/Home'
import Hello from './components/Hello'

Vue.use(VueRouter)
Vue.use(BootstrapVue)

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/hello',
            name: 'hello',
            component: Hello,
        },
    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});
