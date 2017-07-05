
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.VueSession = require('vue-session');

import Vue from 'vue'
import VueSession from 'vue-session'

Vue.use(VueSession);

import router from './router'
import axios from 'axios'

var myAxios = axios.create({
    baseURL: 'http://mysite.app/'
});

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
            myAxios.get('api/posts')
                .then(function (response) {
                    app.$session.set('posts', JSON.stringify(response.data.posts))
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        getProjects: function () {
            myAxios.get('api/projects')
                .then(function (response) {
                    app.$session.set('projects', JSON.stringify(response.data))
                })
                .catch(function (error) {
                    console.log(error);
                });
        }
    },
    created () {
        if (this.$session.exists()) {
            console.log("session data restored");
        } else {
            this.$session.start();
            this.getPosts();
            this.getProjects();
            console.log('session data set');
        }
    },
    destroyed () {
        this.$session.destroy();
        console.log("session destroyed");
    }
});
