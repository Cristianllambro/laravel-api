require('./bootstrap');
 
window.Vue = require('vue');
window.Axios = require('axios');
 
// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
 
import App from './views/App.vue'
 
const app = new Vue({
    el: '#app',
    render: h=> h(App),
});