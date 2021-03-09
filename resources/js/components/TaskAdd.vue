<template>
  <form :class="classList" @submit.prevent="addTaskToList">
    <input  v-model="body"
            type="text"
            class="text-input"
            placeholder="タスクを追加"
            @focusin="startEditing"
            @focusout="finishEditing"
    />
    <button type="submit" class="text-white border-0 rounded-pill"
    :class="[bodyExists ? 'teal sccent-4' : 'stylish-color']"
    v-if="isEditing || bodyExists">
      タスクを追加
    </button>
  </form>
</template>

<script>
export default {
  // props: {
  //   listIndex: {
  //     type: Number,
  //     required: true,
  //   }
  // },
  data: function() {
    return {
      body: '',
      isEditing:false,
    }
  },
  computed:{
    classList(){
      const classList = ['addtask']
      if(this.isEditing){
        classList.push('active')
      }
      return classList
    },
    bodyExists(){
      return this.body.length > 0
    }
  },
  methods: {
  startEditing: function(){
    this.isEditing = true
  },
  finishEditing: function(){
    this.isEditing = false
  },
  addTaskToList: function() {
    this.$store.dispatch('task/addtask', { body: this.body })
      this.body = ''
   }
  }
}
</script>