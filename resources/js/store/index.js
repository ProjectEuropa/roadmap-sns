import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    lists:[],
  },
  mutations: {
    addlist(state, payload) {
      state.lists.push({ title:payload.title, cards:[] })
    },
    removeTutorial(state, payload) {
      state.lists.splice(payload.listIndex, 1)
    },
  },
  actions: {
    addlist(context, payload){
      context.commit('addlist',payload)
    },
    removeTutorial(context, payload) {
      context.commit('removeTutorial', payload)
    },
  },
  getters: {
  }
})