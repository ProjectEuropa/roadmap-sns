<template>
  <form class="addtask" @submit.prevent="addTaskToList">
    <input  v-model="body"
            type="text"
            class="text-input"
            placeholder="タスクの追加"
    />
    <button type="submit" class="add-button">
      Add
    </button>
  </form>
</template>

<script>
export default {
  data: function() {
    return {
      body: '',
    }
  },
  methods: {
  addCardToList: function() {
    this.$store.dispatch('addCardToList', { body: this.body, listIndex: this.listIndex })
      this.body = ''
   }
  }
}
</script>