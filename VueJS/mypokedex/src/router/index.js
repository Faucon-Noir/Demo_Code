import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'

Vue.use(VueRouter)

const routes = [{
        path: '/',
        name: 'Home',
        component: Home
    },
    {
        path: '/list',
        name: 'List',
        component: () =>
            import ( /* webpackChunkName: "list" */ '../components/PokeList.vue')
    },
    {
        path: '/pokemon',
        name: 'Details',
        component: () =>
            import ( /* webpackChunkName: "details" */ '../components/PokemonDetails.vue')
    }
]

const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
})

export default router