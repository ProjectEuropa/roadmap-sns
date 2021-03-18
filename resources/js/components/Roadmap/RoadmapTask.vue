<template>
  <div>
    <div v-for="task in tasks" :key="task.id" class="d-flex flex-row list border p-2 m-2">
        {{ task.name }}
        <div class="deletelist" @click="removeTask(task)">×</div>
    </div>
    <div class="m-1">
      <roadmap-task-add 
      :listIndex="listIndex" />
    </div>
  </div>
</template>

<script>
import RoadmapTaskAdd from './RoadmapTaskAdd'
import { mapState } from 'vuex'

export default{
  components:{
    RoadmapTaskAdd,
  },
  props:{
    initialTasks:{
      type:Array,
    },
    listIndex:{
      type:Number,
      required:true,
    },
  },
  data(){
    return {
      getTasks:this.initialTasks,
    }
  },
  computed: mapState({
    tasks(state) {
      return state.roadmap.lists[this.listIndex].tasks;
    }
  }),
  methods:{
    removeTask:function(task){
      if(confirm('本当にこのタスクを削除しますか？')){
        this.$store.dispatch('roadmap/removeTask',{ 
        id:task.id })
      }
    },
  }
}

</script>