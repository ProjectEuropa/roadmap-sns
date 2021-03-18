<template>
  <div class="tutorial-list mr-1 align-top ">
    <button class="btn">
      <p class="m-1 pr-5 text-nowrap">{{ title }}</p>
      <div class="deletelist" @click="removeTutorial">×</div>
    </button>
    
    <roadmap-task 
    :listIndex="listIndex"
    />
  </div>

</template>

<script>
import RoadmapTask from './RoadmapTask'

export default{
  components:{
    RoadmapTask,
  },
  props:{
    title:{
      type:String,
      required:true
    },
    listIndex:{
      type:Number,
      required:true
    }
  },
  methods:{
    removeTutorial:function(){
      if(confirm('本当にこの教材を削除しますか？')){
        this.$store.dispatch('tutorial/removeTutorial',{ 
        listIndex:this.listIndex })
      }
    },
  },
}

</script>