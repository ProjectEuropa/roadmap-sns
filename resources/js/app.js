import './bootstrap'
import Vue from 'vue'
import store from './store'
import RoadmapLike from './components/RoadmapLike'
// 削除 import Tutorial from './components/Tutorial'
import TutorialList from './components/TutorialList'

// 2021/01/31追加
import TutorialAdd from './components/TutorialAdd'

const app = new Vue({
  el: '#app',
  store,
  components: {
    RoadmapLike,
    TutorialList,
    TutorialAdd,
  }
})