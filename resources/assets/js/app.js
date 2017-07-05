
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
        projects: {},
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
                    return JSON.stringify(response.data.posts);
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        getProjects: function () {
            axios.get('/api/projects')
                .then(function (response) {
                    return JSON.stringify(response.data);
                })
                .catch(function (error) {
                    console.log(error);
                });
        }
    },
    created () {
        this.$session.start();
        if ( this.$session.has('posts') && this.$session.has('projects') ) {
            app.posts = JSON.parse(this.$session.get('posts'));
            app.projects = JSON.parse(this.$session.get('projects'));
            console.log('retrieved data from session');
        } else {
            console.log(this.getPosts());
            this.$session.set('posts', this.getPosts());
            this.$session.set('projects', this.getProjects());
            console.log('set session data');
        }
    },
    destroyed () {
        this.$session.destroy();
        console.log("session destroyed");
    }
});
