import './bootstrap'
import Vue from 'vue'
import RoadmapLike from './components/RoadmapLike'
import TutorialAdd from './components/TutorialAdd'

const app = new Vue({
  el: '#app',
  components: {
    RoadmapLike,
    TutorialAdd,
  }
})