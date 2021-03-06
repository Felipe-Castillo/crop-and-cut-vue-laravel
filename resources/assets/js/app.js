
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Toasted from 'vue-toasted';

Vue.use(Toasted)
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('custom-avatar-editor', require('./components/vue-avatar.vue'));

import UploadForm from './components/UploadForm'
import SaveImage from './components/SaveImage'

const app = new Vue({
    el: '#app',
    components:{SaveImage}
});
