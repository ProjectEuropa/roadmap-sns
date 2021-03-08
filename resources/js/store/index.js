import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

const store= new Vuex.Store({
  state: { 
    lists:[],
    cards:[],
  },
  mutations: {
    initiallist(state, payload){
      state.lists = payload
    },
    addlist(state, payload) {
      state.lists = payload.tutorials
    },
    removeTutorial(state, payload) {
      state.lists = payload.tutorials
    },
  },
  actions: {
    async initiallist(context, payload){
      await context.commit('initiallist',payload)
    },
    async addlist(context, payload){
      const response = await axios.post('/tutorials/store',payload)
      context.commit('addlist', response.data)
    },
    async removeTutorial(context, payload) {
      const response = await axios.delete(`/tutorials/${payload.id}/destroy`,payload)

      context.commit('removeTutorial', response.data)
    },
  },
  getters: {
  }
})

export default store