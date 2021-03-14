<template>
  <div class="tutorial-list mr-1 align-top ">
    <button class="btn"
    :class="[currentTutorial ? 'btn-primary' : 'btn-outline-dark']"
    @click="changeCurrentTutorialId">
      <p class="m-1 pr-5">{{ title }}</p>
      <div class="deletelist" @click="removeTutorial">×</div>
    </button>
  </div>

</template>

<script>
import { mapState } from 'vuex'

export default{
  props:{
    id:{
      type:Number,
      required:true
    },
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
        id:this.id,
        listIndex:this.listIndex })
      }
    },
    changeCurrentTutorialId:function(){
      this.$store.dispatch('tutorial/changeCurrentTutorialId',{id:this.id})
    },
  },
  computed:{
    ...mapState({
      current_tutorial_id: state => state.tutorial.current_tutorial_id
    }),
    currentTutorial(){
      return this.id === this.current_tutorial_id
    }
  }
}

</script>