export const state = () => ({
  loading: false
})

export const mutations = {
  toggle (state) {
    state.loading = !state.loading
  }
}