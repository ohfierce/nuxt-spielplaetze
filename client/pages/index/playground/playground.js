export default {
  name: 'playgorund',
  props: ['visible', 'content'],
  data () {
    return {}
  },
  mounted () {
    console.log(this.content)
  },
  computed: {
    isCurrentlyTransitioning () { return this.$store.state.playground.transition }
  },
  methods: {
    closeWidget () {
      this.$store.commit('playground/removeContent')
    }
  }
}
