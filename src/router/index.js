import Vue from "vue";
import VueRouter from "vue-router";
import Home from "../views/Home.vue";
import Detail from "../views/Detail.vue";
import CrudArticle from "../views/CrudArticle.vue";

Vue.use(VueRouter);

const routes = [
  {
    path: "/",
    name: "Home",
    component: Home,
  },
  {
    path: "/detail",
    component: Detail,
  },
  {
    path: "/crud-article",
    component: CrudArticle,
  },
];

const router = new VueRouter({
  routes,
});

export default router;
