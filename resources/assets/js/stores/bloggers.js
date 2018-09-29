function compareIdAsc(a, b) {
  if (a.id > b.id) return 1;
  if (a.id < b.id) return -1;
}

function compareIdDesc(a, b) {
  if (a.id < b.id) return 1;
  if (a.id > b.id) return -1;
}

function compareTitleAsc(a, b) {
  if (a.title.toLowerCase() > b.title.toLowerCase()) return 1;
  if (a.title.toLowerCase() < b.title.toLowerCase()) return -1;
}

function compareTitleDesc(a, b) {
  if (a.title.toLowerCase() < b.title.toLowerCase()) return 1;
  if (a.title.toLowerCase() > b.title.toLowerCase()) return -1;
}

export default {
  state    : {
    bloggers         : [],
    filtered_bloggers: [],
    blogger          : {},
    current_blogger  : null,
    title_filter     : '',
    sortParam        : 'idasc',
  },
  getters  : {
    bloggers         : state => state.bloggers,
    filtered_bloggers: state => state.filtered_bloggers,
    blogger          : state => state.blogger,
    current_blogger  : state => state.current_blogger,
    title_filter     : state => state.title_filter,
    sortParam        : state => state.sortParam,
  },
  mutations: {
    setBloggers(state, bloggers) {
      state.bloggers = bloggers
    },
    setFilteredBloggers(state, filtered_bloggers) {
      state.filtered_bloggers = filtered_bloggers
    },
    setBlogger(state, blogger) {
      state.blogger = blogger
    },
    setCurrentBlogger(state, current_blogger) {
      state.current_blogger = current_blogger
    },
    setTitleFilter(state, title_filter) {
      state.title_filter = title_filter
    },
    setSortParam(state, sortParam) {
      state.sortParam = sortParam
    }
  },
  actions  : {
    getBloggers({state, commit}, query) {
      return axios.get('/api/bloggers', {params: query}).then(res => {
        commit('setBloggers', res.data);
        commit('setFilteredBloggers', res.data);
        return res.data;
      })
    },
    filteredList({state, commit}) {
      switch (state.sortParam) {
        case 'idasc':
          state.bloggers.sort(compareIdAsc);
          break;
        case 'iddesc':
          state.bloggers.sort(compareIdDesc);
          break;
        case 'titleasc':
          state.bloggers.sort(compareTitleAsc);
          break;
        case 'titledesc':
          state.bloggers.sort(compareTitleDesc);
          break;
      }
      let bloggers = state.bloggers.filter(function (elem) {
        if (state.title_filter === '') return true;
        else return elem.title.indexOf(state.title_filter) > -1;
      });
      commit('setFilteredBloggers', bloggers);
    },
    getBlogger({state, commit}, id) {
      for (let blogger of state.bloggers) {
        if (blogger.id == id) {
          commit('setCurrentBlogger', blogger.id);
          commit('setBlogger', blogger)
        }
      }
    },
    updateBlogger({state, commit}, params) {
      return axios.put('/api/blogger/' + params.id + '/updateBlogger', {params: params});
    },
    sendComment({state, commit}, params) {
        return axios.post('/api/blogger/storeComment', {params: params});
    },
    addFile({state, commit}, params){
      return axios.post('/api/blogger/uploadChannelPicture', params).then(res => {
        commit('setBlogger', res.data);
        return res.data;
      });
    }
  }
}
