import mapboxWrapper from './mapboxWrapper/mapboxWrapper.vue'
import playground from './playground/playground.vue'
import loading from '~/components/loading/loading.vue'

export default {
  layout: 'simple',
  components: {
    mapboxWrapper,
    playground,
    loading
  },
  data () {
    return {
      debugVisible: true
    }
  },
  mounted () {
  },
  computed: {
    mapLoading () { return this.$store.state.loading.loading },
    widgetVisible () { return this.$store.state.playground.visible },
    widgetContent () {
      if (this.widgetVisible) {
        return this.$store.state.playground.content
      }
    },
    transitionActive () { return this.$store.state.playground.transition }
  },
  methods: {
    toggleDebug () {
      console.log('2')
      this.debugVisible = !this.debugVisible
    }
  }
}
