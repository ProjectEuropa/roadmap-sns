<template>
  <div class="row mt-2">
      <div class="col border col-md-4">
        <h3 class="text-center"> Todo </h3>
        <p>やることタスクの数：{{Todo.length}}</p>
          <div v-for="task in Todo" :key="task.id" class="d-flex flex-row list border p-2 m-1">
              {{ task.name }}
              <div class="deletelist" @click="removeTask(task)">×</div>
          </div>
          <div class="m-1">
            <task-add
              :status=1
            />
          </div>
      </div>
      <div class="col border col-md-4">
        <h3 class="text-center"> Doing </h3>
        <p>実施中タスクの数：{{Doing.length}}</p>
         <div v-for="task in Doing" :key="task.id" class="d-flex flex-row list border p-2 m-1">
                {{ task.name }}
                <div class="deletelist" @click="removeTask(task)">×</div>
            </div>
            <div class="m-1">
              <task-add
                :status=2
              />
            </div>
      </div>
      <div class="col border col-md-4">
        <h3 class="text-center"> Done </h3>
        <p>完了タスクの数：{{Done.length}}</p>
        <div v-for="task in Done" :key="task.id" class="d-flex flex-row list border p-2 m-1">
                {{ task.name }}
                <div class="deletelist" @click="removeTask(task)">×</div>
            </div>
            <div class="m-1">
              <task-add
                :status=3
              />
            </div>
      </div>
    </div>
</template>

<script>
import TaskAdd from './TaskAdd'
import { mapState } from 'vuex'

export default{
  components:{
    TaskAdd,
  },
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
  mounted: function () {
    this.$store.dispatch('task/initialtask',this.getTasks)
  },
  computed: {
    ...mapState({
      tasks: state => state.task.tasks
    }),
    Todo: function(){
      return this.tasks.filter(function(task){
        return task.status === 1
      })
    },
    Doing: function(){
      return this.tasks.filter(function(task){
        return task.status === 2
      })
    },
    Done: function(){
      return this.tasks.filter(function(task){
        return task.status === 3
      })
    },

  },
  methods:{
    removeTask:function(task){
      if(confirm('本当にこのタスクを削除しますか？')){
        this.$store.dispatch('task/removeTask',{ 
        id:task.id })
      }
    },
  }
}

</script>