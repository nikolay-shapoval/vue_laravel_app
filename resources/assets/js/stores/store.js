import Vue from 'vue'
import Vuex from 'vuex'
import bloggers from './bloggers'
import videos from './videos'

Vue.use(Vuex)

export default new Vuex.Store({
  modules: {
    bloggers,
    videos
  }
})