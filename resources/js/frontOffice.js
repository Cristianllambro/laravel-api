require('./bootstrap');
 
window.Vue = require('vue');
window.Axios = require('axios');


//importare le pagine per le rotte
import App from './views/App.vue'
import VueRouter from 'vue-router';
import HomePage from './pages/HomePage';
import AboutPage from './pages/AboutPage';
import BlogIndex from './pages/BlogIndex';
import PostDetail from './pages/PostDetail';

Vue.use(VueRouter);

const route = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'Home',
            components: HomePage,
        },
        {
            path: '/about',
            name: 'about',
            components: AboutPage,
        },
        {
            path: '/blog',
            name: 'blogIndex',
            components: BlogIndex,
        },
        {
            path: '/blog/:slug',
            name: 'postDetail',
            components: PostDetail,
        },
    ]
})

const app = new Vue({
    el: '#app',
    render: h=> h(App),
    route,
});