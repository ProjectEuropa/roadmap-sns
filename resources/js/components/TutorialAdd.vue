<template>
  <form :class="classList" @submit.prevent="addList">
    <input v-model="title"
    type="test"
    class="text-input"
    placeholder="新しい教材名を入力"
    @focusin="startEditing"
    @focusout="finishEditing"
    >
    <button type="submit" class="teal accent-4 text-white border-0 rounded-pill">
      教材を追加
    </button>
  </form>
</template>

<script>
export default {
  data: function(){
    return {
      title: '',
      idEditing: false,
    }
  },
  computed:{
    classList(){
      const classList = ['addlist']
      if(this.isEditing){
        classList.push('active')
      }
      return classList
    },
  },

  methods: {
    addList:function() {
      this.$store.dispatch('addlist',{title:this.title})
      this.title = ''
    },
    startEditing(){
      this.isEditing = true
    },
    finishEditing(){
      this.isEditing = false
    },
  }

}
</script>