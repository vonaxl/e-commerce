require("./bootstrap");
require("../../node_modules/bootstrap-vue/dist/bootstrap-vue");

import Vue from "vue";
import VueRouter from "vue-router";

import App from "./components/App";
import Home from "./components/Home";
import Search from "./components/Search";
import Show from "./components/Show";

Vue.use(VueRouter);
Vue.use(BootstrapVue);

const router = new VueRouter({
	mode: "history",
	routes: [
		{
			path: "/",
			name: "home",
			component: Home
		},
		{
			path: "/search/:navSearch",
			name: "resultSearch",
			component: Search
		},
		{
			path: "/show/:id",
			name: "showProduct",
			component: Show
		}
	]
});

const app = new Vue({
	el: "#app",
	components: { App },
	router
});
