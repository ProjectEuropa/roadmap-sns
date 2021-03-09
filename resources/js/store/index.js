import Vue from 'vue'
import Vuex from 'vuex'

import tutorial from './tutorial'
import task from './task'

Vue.use(Vuex)

const store= new Vuex.Store({
  modules: {
    tutorial,
    task
  }
})

export default store