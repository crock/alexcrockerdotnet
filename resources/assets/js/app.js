
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import router from './router'
import axios from 'axios'

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('navbar', require('./components/Navbar.vue'));
Vue.component('profile', require('./components/Profile.vue'));

const app = new Vue({
    el: '#app',
    data: {
        posts: {},
        works: [
            {title: 'Alpha', img: 'https://placehold.it/250x250', imgAlt: 'work 1'},
            {title: 'Bravo', img: 'https://placehold.it/250x250', imgAlt: 'work 2'},
            {title: 'Charlie', img: 'https://placehold.it/250x250', imgAlt: 'work 3'},
            {title: 'Delta', img: 'https://placehold.it/250x250', imgAlt: 'work 4'}
        ]
    },
    router,
    methods: {
        getPosts: function () {
            axios.get('/api/posts')
                .then(function (response) {
                    //app.posts.push(response.data.posts);
                    app.posts = response.data.posts;
                })
                .catch(function (error) {
                    console.log(error);
                });
        }
    },
    created () {
        this.getPosts();
    }
});
