import './bootstrap'
import Vue from 'vue'
import store from './store'
import RoadmapLike from './components/RoadmapLike'

import Tutorial from './components/Tutorial'
import Task from './components/Task'

const app = new Vue({
  el: '#app',
  store,
  components: {
    RoadmapLike,
    Tutorial,
    Task,
    
  }
})