import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter); 

import Home from './pages/Home'; 
import Restaurants from './pages/Restaurants'; 
import About from './pages/About'; 
import Contacts from './pages/Contacts'; 
import Restaurant from './pages/Restaurant'; 
import Plates from './pages/Plates'; 

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
        {
            path: '/restaurants/:slug', 
            name: 'restaurant', 
            component: Restaurant
        },
        {
            path: '/restaurants/:id/plates', 
            name: 'plates', 
            component: Plates
        },

    ]
}); 

export default router; 