export const state = () => ({
  visible: false,
  content: null,
  transition: false
})

export const mutations = {
  toggle (state) {
    state.visible = !state.visible
  },
  insertContent (state, content) {
    if (state.visible && state.content) {
      if (state.content.id !== content.id) {
        state.content = content
      } else {
        console.log('window open, same content, doing nothing')
      }
      
    }
    state.content = content
    state.visible = true
  },
  removeContent (state) {
    state.visible = false
    state.content = null
  }
}
