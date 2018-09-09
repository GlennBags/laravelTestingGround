import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter);

const routes = [
    {
        path: '/',
        component: App,
        name: 'home'
    }
];

const routers = new VueRouter({
    mode: 'history',
    routes
});

new Vue({
    router
}).$mount('#app');

// new Vue({
//     el: '#app',
//     render: h => h(App)
// });
