import './bootstrap';
import '../sass/app.scss'
import Router from '@/router'
import store from '@/store'
import { createApp } from 'vue/dist/vue.esm-bundler';
import VueAxios from 'vue-axios';
import axios from 'axios';
const app = createApp({})
app.use(Router)
app.use(store)
app.use(VueAxios, axios)
//app.use(axios);
app.mount('#app')
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 *

import './bootstrap';
import '../sass/app.scss'
//import { createApp } from 'vue';
import Router from '@/router'
import store from '@/store'
import { createApp } from 'vue/dist/vue.esm-bundler';
/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 *

const app = createApp({});
app.use(Router)
app.use(store)
app.mount('#app')

import ExampleComponent from './components/ExampleComponent.vue';
app.component('example-component', ExampleComponent);


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

//app.mount('#app');
