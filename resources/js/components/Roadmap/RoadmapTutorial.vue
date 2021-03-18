<template>
 <div class="border p-3 mt-1 tutorial">
  <!-- <div class="d-flex flex-row"> -->
    <input type="hidden" name="tutorial_task_names" :value="listsJson" required>
    <roadmap-tutorial-list v-for="(list, index) in lists"
    :key="list.id"
    :title="list.title"
    :listIndex="index"
    />
    <div class="p-2 mr-1">
      <roadmap-tutorial-add/>
    </div>
  </div>
 <!-- </div> -->
</template>

<script>
import RoadmapTutorialAdd from './RoadmapTutorialAdd'
import RoadmapTutorialList from './RoadmapTutorialList'
import { mapState } from 'vuex'

export default {
  components:{
    RoadmapTutorialAdd,
    RoadmapTutorialList,
  },
  // data(){
  //   return {
  //     getLists:this.initialTutorials,
  //   }
  // },
  // mounted: function () {
  //   this.$store.dispatch('tutorial/initiallist',this.getLists)
  // },
  computed:{
    ...mapState({
      lists: state => state.roadmap.lists
    }),
    listsJson(){
      return JSON.stringify(this.lists)
    },
  },
}

</script>