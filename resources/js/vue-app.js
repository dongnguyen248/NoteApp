import Vue from 'vue'
import VueRouter from 'vue-router';
import Home from './components/Notes.vue';
import Create from './components/Create.vue';
import { routes } from './router';
Vue.use(VueRouter);
const router = new VueRouter({
    mode: 'history',
    routes
});
new Vue({
    el: '#app',
    router
});