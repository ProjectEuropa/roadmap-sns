<template>
  <div class="d-flex flex-row">
    <tutorial-list v-for="(list, index) in lists"
    :key="list.id"
    :title="list.name"
    :listIndex="index"
    />
    <div class="p-2 mr-1">
      <tutorial-add/>
    </div>
  </div>
</template>

<script>
import TutorialAdd from './TutorialAdd'
import TutorialList from './TutorialList'
import { mapState } from 'vuex'

export default {
  components:{
    TutorialAdd,
    TutorialList,
  },
  props: {
    initialTitle:{
      type:Array,
      default:[]
    },
  },
  data(){
    return {
      lists:this.initialTitle,
    }
  },

  computed:{
  //     async index(){
  //       const response = await axios.get('/tutorials')

  //     this.lists = response.data.tutorials
  //     },

    // ...mapState([
    //   'lists'
    // ]),
  },
}

</script>