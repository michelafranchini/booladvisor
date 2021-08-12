import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter); 

import Home from './pages/Home'; 
import Restaurants from './pages/Restaurants'; 
import About from './pages/About'; 
import Contacts from './pages/Contacts'; 

const router = new VueRouter({
    mode: 'history', 
    routes: [
        {
            path: '/', 
            name: 'home', 
            component: Home
        }, 
        {
            path: '/restaurants', 
            name: 'restaurants', 
            component: Restaurants
        },
        {
            path: '/about', 
            name: 'about', 
            component: About
        },
        {
            path: '/contacts', 
            name: 'contacts', 
            component: Contacts
        },
    ]
}); 

export default router; 