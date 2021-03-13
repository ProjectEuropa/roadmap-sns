<template>
  <div>
    <tutorial
      :initialTutorials="initialTutorials"
    />
    
    <task
      :initialTasks="initialTasks"
    />
  </div>
</template>

<script>
import Tutorial from './Tutorial.vue'
import Task from './Task.vue'

export default {
  components:{
    Tutorial,
    Task,
  },
  props:{
    initialTutorials:{
      type:Array,
      default:[]
    },
    initialTasks:{
      type:Array,
      default:[]
    },
  }
}
</script>