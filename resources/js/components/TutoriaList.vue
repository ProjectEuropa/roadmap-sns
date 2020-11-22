<template>
  <div class="list border p-2 mr-1">
    <div class="listheader">
      <p class="tutorial-title">{{ title }}</p>
      <div class="deletelist" @click="removeTutorial">×</div>
    </div>
  </div>

</template>

<script>

export default{
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
      this.$store.dispatch('removeTutorial',{ listIndex:this.listIndex })
    }
  }
}

</script>