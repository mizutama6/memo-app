import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import Create from '../views/Create';
import Detail from '../views/Detail.vue'
import Edit from '../views/Edit.vue'

Vue.use(VueRouter)

const routes = [
  {
    // ホーム
    path: '/memo',
    name: 'Home',
    component: Home,
  },
  {
    // 新規作成ページ
    path: '/memo/create',
    name: 'Create',
    component: Create,
  },
  {
    // 詳細ページ
    path: '/memo/:id',
    name: 'Detail',
    component: Detail,
    props: true,
  },
  {
    // 編集ページ
    path: '/memo/:id/edit',
    name: 'Edit',
    component: Edit,
    props: true,
  }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router