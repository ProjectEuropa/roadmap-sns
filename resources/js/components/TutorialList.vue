<template>
  <div class="list border p-2 mr-1 align-top">
      <p class="m-1 pr-5">{{ title }}</p>
      <div class="deletelist" @click="removeTutorial">×</div>
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