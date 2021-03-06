
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
//import router from './router'
import axios from 'axios'

Vue.use(VueSession);

const myAxios = axios.create({
    baseURL: 'https://alexcrocker.net/',
    //baseURL: 'http://ac.local/'
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('navbar', require('./components/Navbar.vue'));
Vue.component('contact', require('./components/Contact.vue'));

const app = new Vue({
    el: '#app',
    data: {
        social: {
            twitter: 'https://twitter.com/kd9/',
            github: 'https://github.com/crock/',
            linkedin: 'https://www.linkedin.com/in/awcrocker/',
            behance: 'https://www.behance.net/alexcrocker',
            dribbble: 'https://dribbble.com/croc'
        }
    },
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
        },
        getShots: function () {
            myAxios.get('api/shots')
                .then(function (response) {
                    app.$session.set('shots', JSON.stringify(response.data))
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
            this.getShots();
            console.log('session data set');
        }
    },
    destroyed () {
        this.$session.destroy();
        console.log("session destroyed");
    }
});
