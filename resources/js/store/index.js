import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

const savedLists = localStorage.getItem('tutorial-lists')

const store= new Vuex.Store({
  state: {
    lists:savedLists ? JSON.parse(savedLists):[],
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

store.subscribe((mutation, state) => {
  localStorage.setItem('tutorial-lists', JSON.stringify(state.lists))
})

export default store