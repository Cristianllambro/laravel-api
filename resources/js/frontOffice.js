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
import ContactPage from './pages/ContactPage';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: HomePage,
        },
        {
            path: '/about',
            name: 'about',
            component: AboutPage,
        },
        {
            path: '/blog',
            name: 'blogIndex',
            component: BlogIndex,
        },
        {
            path: '/blog/:slug',
            name: 'postDetail',
            component: PostDetail,
        },
        {
            path: '/contact',
            name: 'contact',
            component: ContactPage,
        },
    ]
})

const app = new Vue({
    el: '#app',
    render: h=> h(App),
    router,
});