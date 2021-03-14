const state = { 
  lists:[],
  current_tutorial_id:0,
}

const mutations = {
  initialTutorialId(state, payload){
    state.current_tutorial_id = payload
  },
  initiallist(state, payload){
    state.lists = payload
  },
  addlist(state, payload) {
    state.lists = payload.tutorials
  },
  removeTutorial(state, payload) {
    state.lists = payload.tutorials
  },
  changeCurrentTutorialId(state, payload){
    state.current_tutorial_id = payload.id
  }
}

const actions = {
  initialTutorialId(context, payload){
    context.commit('initialTutorialId',payload)
  },
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
  changeCurrentTutorialId(context, payload){
    context.commit('changeCurrentTutorialId', payload)
  }
}

export default {
  namespaced: true,
  state,
  mutations,
  actions
}