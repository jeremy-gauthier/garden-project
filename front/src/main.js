import Vue from 'vue';
import App from './App.vue';
import VueRouter from "vue-router";

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';

import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';
import './custom.scss';

import Home from "@/components/pages/Home";
import About from "@/components/pages/About";

Vue.use(VueRouter);
Vue.use(BootstrapVue);
Vue.use(IconsPlugin);

const routes=[
  {path:"/", component:Home},
  {path:"/about", component:About}
]

const router = new VueRouter({
  mode:"history",
  routes
}) 



Vue.config.productionTip = false

new Vue({
  render: h => h(App),
  router
}).$mount('#app');
