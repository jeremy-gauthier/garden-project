import Vue from 'vue';
import App from './App.vue';
import VueRouter from "vue-router";

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';

import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';
import './custom.scss';

import Home from "@/components/pages/Home";
import Garden from "@/components/pages/Garden";
import Legumes from "@/components/pages/Legumes";
import Fruits from "@/components/pages/Fruits";
import Aromates from "@/components/pages/Aromates";

import Melon from "@/components/posts/Melon";
import Pasteque from "@/components/posts/Pasteque";
import Aubergine from "@/components/posts/Aubergine";
import Poivron from "@/components/posts/Poivron";
import Menthe from "@/components/posts/Menthe";
import Poireau from "@/components/posts/Poireau";
import Pomme from "@/components/posts/Pomme";
import Thym from "@/components/posts/Thym";
import Persil from "@/components/posts/Persil";

Vue.use(VueRouter);
Vue.use(BootstrapVue);
Vue.use(IconsPlugin);

const routes=[
  {path:"/", component : Home},
  {path:"/garden", component : Garden},
  {path:"/légumes", component : Legumes},
  {path:"/fruits", component : Fruits},
  {path:"/aromates", component : Aromates},
  {path:"/posts/aubergine", component : Aubergine},
  {path:"/posts/poireau", component : Poireau},
  {path:"/posts/poivron", component : Poivron},
  {path:"/posts/thym", component : Thym},
  {path:"/posts/persil", component : Persil},
  {path:"/posts/menthe", component : Menthe},
  {path:"/posts/melon", component : Melon},
  {path:"/posts/pomme", component : Pomme},
  {path:"/posts/pasteque", component : Pasteque},
  
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
