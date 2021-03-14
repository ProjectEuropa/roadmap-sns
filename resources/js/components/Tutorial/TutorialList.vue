<template>
  <div class="tutorial-list mr-1 align-top ">
    <button class="btn btn-outline-dark">
      <p class="m-1 pr-5">{{ title }}</p>
      <div class="deletelist" @click="removeTutorial">×</div>
    </button>
  </div>

</template>

<script>

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
  }
}

</script>