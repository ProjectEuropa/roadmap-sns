const state = { 
  lists:[],
}

const mutations = {
  addlist(state, payload) {
    state.lists.push( {title:payload.title,tasks:[]} )
  },
  removeTutorial(state, payload) {
    state.lists = payload.tutorials
  },
  addtask(state, payload){
    // state.tasks = payload.name;
  },
}

const actions = {
  addlist(context, payload){
    context.commit('addlist', payload)
  },
  removeTutorial(context, payload) {
    context.commit('removeTutorial', payload)
  },
  addtask(context, payload){
    context.commit('addtask', payload)
  },
}

export default {
  namespaced: true,
  state,
  mutations,
  actions
}