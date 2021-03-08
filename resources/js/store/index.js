import Vue from 'vue'
import Vuex from 'vuex'

import tutorial from './tutorial'

Vue.use(Vuex)

const store= new Vuex.Store({
  modules: {
    tutorial
  }
})

export default store