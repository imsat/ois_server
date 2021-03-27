

require('./bootstrap');

window.Vue = require('vue');

import store from './store'


Vue.component('vue-app', require('./components/App.vue').default);


const app = new Vue({
    el: '#app',
    store
});
