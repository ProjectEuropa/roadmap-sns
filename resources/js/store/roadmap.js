const state = { 
  lists:[],
}

const mutations = {
  addlist(state, payload) {
    state.lists.push({ title:payload.title })
  },
  removeTutorial(state, payload) {
    state.lists = payload.tutorials
  },
}

const actions = {
  addlist(context, payload){
    context.commit('addlist', payload)
  },
  removeTutorial(context, payload) {
    context.commit('removeTutorial', payload)
  },
}

export default {
  namespaced: true,
  state,
  mutations,
  actions
}