<template>
  <form class="addlist" @submit.prevent="addList">
    <input v-model="title"
    type="test"
    class="text-input"
    placeholder="新しい教材名を入力"
    >
    <button type="submit" class="add-button">
      教材を追加
    </button>
  </form>
</template>

<script>
</script>