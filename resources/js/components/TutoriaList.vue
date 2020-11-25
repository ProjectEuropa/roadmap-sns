<template>
  <div class="list border p-2 mr-1 align-top">
    <div class="d-inline-block">
      <p class="m-1 pr-5">{{ title }}</p>
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
      if(confirm('本当にこのリストを削除しますか？')){
        this.$store.dispatch('removeTutorial',{ listIndex:this.listIndex })
      }
    },
  }
}

</script>