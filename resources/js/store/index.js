import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

// const axios = require('axios');

// const savedLists = localStorage.getItem('tutorial-lists')

const store= new Vuex.Store({
  state: { 
    lists:[]
    // lists:savedLists ? JSON.parse(savedLists):[],
  },
  mutations: {
    initiallist(state, payload){
      state.lists = payload
    },
    addlist(state, payload) {
      state.lists.push({ title:payload.title, cards:[] })
    },
    removeTutorial(state, payload) {
      state.lists.splice(payload.listIndex, 1)
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

// store.subscribe((mutation, state) => {
//   localStorage.setItem('tutorial-lists', JSON.stringify(state.lists))
// })

export default store