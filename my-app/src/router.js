import Vue from 'vue'
import Router from 'vue-router'

import Summary from './views/Summary.vue'
import Installation from './views/Installation.vue'
import Team from './views/Team.vue'
import howTo from './views/how_to_guide.vue'
import goodLooking from './views/good_looking_page.vue'
import Conclusion from './views/conclusion.vue'


Vue.use(Router)

export default new Router({
  mode: 'history',
  base: process.env.BASE_URL,
  routes: [
    {
      path: '/',
      name: 'summary',
      component: Summary
    },
    {
      path: '/conclusion',
      name: 'conclusion',
      component: Conclusion
    },
    {
      path: '/team',
      name: 'team',
      component: Team
    },

    {
      path: '/how_to_guide',
      name: 'howto',
      component: howTo
    },

    {
      path: '/installation',
      name: 'installation',
      component: Installation
    },

    {
      path: '/good_looking_page',
      name: 'good_looking_page',
      component: goodLooking

    },

    

  ]
})