<template>
  <div class="list-index">
    <tutorial-list v-for="(item, index) in lists"
    :key="item.id"
    :title="item.title"
    :listindex="index"
    />
    <div class="p-2 mr-1">
      <tutorial-add/>
    </div>
  </div>
</template>

<script>
import TutorialAdd from './TutorialAdd'
import TutorialList from './TutoriaList'
import { mapState } from 'vuex'

export default {
  components:{
    TutorialAdd,
    TutorialList,
  },
  computed:{
    ...mapState([
      'lists'
    ]),
  },
}

</script>