import './bootstrap'
import Vue from 'vue'
import store from './store'
import RoadmapTutorial from './components/Roadmap/RoadmapTutorial'
import RoadmapLike from './components/RoadmapLike'
import TutorialTask from './components/TutorialTask'

const app = new Vue({
  el: '#app',
  store,
  components: {
    RoadmapTutorial,
    RoadmapLike,
    TutorialTask
  }
})