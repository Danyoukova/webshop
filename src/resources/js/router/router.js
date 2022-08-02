import {createRouter, createWebHashHistory} from 'vue-router'
import ProductView from "../components/ProductView";
import Checkout from "../components/Checkout";
import Cart from "../components/Cart";
import store from "../store";


const routes = [

    {
        path: '/',
        name: 'all',
        component: ProductView
    },
    {
        path: '/login',
        name: 'login',
        component: () => import('../components/LoginForm')
    },

    {
        path: '/checkout',
        name: 'checkout',
        component: Checkout,
        props: true,
        // meta: {
        //     needsAuth: true
        //
        // }
    },
    {
        path: '/cart',
        name: 'cart',
        component: Cart,
        props: true
    },


    // {
    //     path: '/categories',
    //     name: 'test',
    //     component: ProdCatSubcat,
    //     props: true,
    //
    // },
    {
        path: '/summary',
        name: 'summary',
        component: () => import('../components/Summary')
    },

    {
        path: '/products/:id',
        name: 'details',
        component: () => import(/* webpackChunkName: "details" */ '../components/ProductDetailView'),
        props: true
    }


]

const router = createRouter({
    history: createWebHashHistory(),
    routes
})

const authUser = store.getters.getUser
//set guards on specific page before navigate to that page you have to log in
router.beforeEach((to, from, next)=>{
    if(to.meta.needsAuth ){

            next('/login')
        }else{
            next();
        }


})

export default router
