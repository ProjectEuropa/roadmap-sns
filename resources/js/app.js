import './bootstrap'
import Vue from 'vue'
import store from './store'
import RoadmapLike from './components/RoadmapLike'
import TutorialAdd from './components/TutorialAdd'

const app = new Vue({
  el: '#app',
  store,
  components: {
    RoadmapLike,
    TutorialAdd,
  }
})