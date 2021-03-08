<template>
  <div class="row mt-2">
      <div class="col border col-md-4">
        <h3 class="text-center"> Todo </h3>
            <div v-for="task in Todo" :key="task.id" class="border p-2 m-1">
                {{ task.name }}
            </div>
      </div>
      <div class="col border col-md-4">
        <h3 class="text-center"> Doing </h3>
         <div v-for="task in Doing" :key="task.id" class="border p-2 m-1">
                {{ task.name }}
            </div>
      </div>
      <div class="col border col-md-4">
        <h3 class="text-center"> Done </h3>
        <div v-for="task in Done" :key="task.id" class="border p-2 m-1">
                {{ task.name }}
            </div>
      </div>
    </div>
</template>

<script>
export default{
  props:{
    initialTasks:{
      type:Array,
      default:[]
    },
  },
  data(){
    return {
      getTasks:this.initialTasks,
    }
  },
  computed: {
    Todo: function(){
      return this.getTasks.filter(function(task){
        return task.status === 1
      })
    },
    Doing: function(){
      return this.getTasks.filter(function(task){
        return task.status === 2
      })
    },
    Done: function(){
      return this.getTasks.filter(function(task){
        return task.status === 3
      })
    },

  },
}

</script>