
/**
* Load JavaScript dependencies
 */

require('./bootstrap');

/**
 * Import Vue, VueRouter and VueForm
 */

import Vue from 'vue'
import VueForm from 'vform'
import VueRouter from 'vue-router'

/**
 * Import Users Components
 */
import UsersIndex from './components/users/Index.vue'
import UsersShow from './components/users/Show.vue'
import UsersCreate from './components/users/Create.vue'

/**
 * Use VueRouter and VueForm
 */

Vue.use(VueForm, {components: true})
Vue.use(VueRouter)

/**
 * Create Router 
 */
const router = new VueRouter({

  mode: 'history',
  
  routes: [

    { 
      path: '/users', 
      component: UsersIndex
    },

    { 
      path: '/users/create', 
      component: UsersCreate
    },

    {
      path: '/users/:id',
      name: 'user',
      component: UsersShow
    }

  ]
})

/** 
 * Create Vue Instance | Inject Router
*/
new Vue({

    router
 
}).$mount('#app')
