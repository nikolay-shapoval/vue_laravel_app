require('./bootstrap');
window.Vue = require('vue');
import VueRouter from 'vue-router'
import VueI18n from 'vue-i18n'
import moment from 'moment'
import store from './stores/store'
import {mapGetters} from 'vuex'
import Blogger from './components/bloggers/Blogger.vue'
import Videos from './components/bloggers/Video.vue'
import Footbar from './components/common/Footbar.vue'
import Chanel from './components/bloggers/Chanel.vue'
import Welcome from './components/bloggers/Welcome.vue'
import Sidebar from './components/common/Sidebar.vue'
import TabsPanel from './components/common/TabsPanel.vue'

Vue.use(VueI18n);
Vue.use(VueRouter);

const routes = [
  {path: '/', name: 'welcome', component: Welcome},
  {path: '/blogger/:id', name: 'blogger', component: Blogger},
  {path: '/blogger/:id/videos', name: 'videos', component: Videos},
  // {path: '/filter', name: 'filter', component: Filter},
  // {path: '/program', name: 'program', component: Program},
];

const router = new VueRouter({
  linkActiveClass: 'active',
  routes
});

import enTranslation from './translations/en'

const messages = {
  en: enTranslation
};

const i18n = new VueI18n({
  locale: 'en',
  messages,
});

const app = new Vue({
  router,
  store,
  i18n,
  el: '#app',
  data() {
    return {
      modalVisible: false
    }
  },
  computed: {
    ...mapGetters({
      currentUser: 'currentUser'
    })
  },
  methods: {
    // getUser(user) {
    //   if (user && user.role !== 'client') {
    //     this.$store.dispatch('getUsers')
    //   }
    // }
  },
  components: {
    Sidebar,
    Footbar,
    TabsPanel,
  },
  mounted() {
    // moment.locale('en');
    //
    // this.$store.dispatch('getNotifications').then(() => {
    //   this.$root.$emit('notifications:fetched')
    // })
    //
    // this.$store.dispatch('getCurrentUser')
  },
  // watch: {
    // 'currentUser': 'getUser'
  // }
});
