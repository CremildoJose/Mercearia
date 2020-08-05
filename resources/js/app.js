

require('./bootstrap');
require('admin-lte');

window.Vue = require('vue');

import VueRouter from 'vue-router'
Vue.use(VueRouter)

let routes = [
    {path: '/dashboard' ,component:require('./components/Dashboard.vue').default},
    {path: '/category' ,component:require('./components/Category.vue').default},
    {path: '/product' ,component:require('./components/Product.vue').default},
    {path: '/provider' ,component:require('./components/Provider.vue').default},
    {path: '/client' ,component:require('./components/Client.vue').default},
    {path: '/stock' ,component:require('./components/Stock.vue').default},
    {path: '/report' ,component:require('./components/Report.vue').default},
    {path: '/sale' ,component:require('./components/Sale.vue').default},
    {path: '/employee' ,component:require('./components/Employee.vue').default}
]


const router = new VueRouter({
    mode:'history',
    routes
})

Vue.component('example-component', require('./components/ExampleComponent.vue'));
// Vue.component('dashboard', require('./components/Dashboard.vue'));



const app = new Vue({
    el: '#app',
    router
});
