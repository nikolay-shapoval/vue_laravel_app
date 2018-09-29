export default {
  state    : {
    videos         : []
  },
  getters  : {
    videos         : state => state.videos
  },
  mutations: {
    setVideos(state, videos) {
      state.videos = videos;
    }
  },
  actions  : {
    getVideos({state, commit}, query) {
      return axios.get('/api/blogger/' + query + '/videos').then(res => {
        commit('setVideos', res.data);
        return res.data;
      })
    }
  }
}
