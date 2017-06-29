import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router);

//const Blog = () => require('./components/Blog.vue');
//const Work = () => require('./components/Work.vue');
//const Contact = () => require('./components/Contact.vue');

const routes = [
    { path: '/blog', component: require('./components/Blog.vue') },
    { path: '/work', component: require('./components/Work.vue') },
    { path: '/contact', component: require('./components/Contact.vue') }
];

const router = new Router({
    mode: 'history',
    root: '/',
    routes
});

export default router