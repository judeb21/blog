
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('post', require('./components/post.vue'));

const app = new Vue({
    el: '#v-for-blog',
    data:{
    	blog:{
    		title:'title',
    		subtitle:'subtitle',
    		created_at:'created_at',
    		image:'image'
    	},
    },
    mounted()
    {
    	axios.post('/getPost')
    	.then(function (response) {
    		this.blog = response.data
    		//console.log(response);
    	})
    	.catch(function (error) {
    		console.log(error);
    	});
    }
});
