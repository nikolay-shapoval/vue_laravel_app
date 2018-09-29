<template>
  <div id="main-block" class="main-block">
    <div id="main-scroll" class="main-block_inner">
      <div class="subheader_cnt subheader-mob">
        <!--title-->
        <h1 class="subheader_t">{{ $t('bloggers.video.title') }}</h1>
      </div>
      <!--content-->
      <form class="content form add-tourist" role="form">
        <div class="row">
          <div class="col-lg-12 lev-1">
            <div class="box">
              <table class="table table-fixed table-videos">
                <thead>
                <tr>
                  <th class="col-xs-4">
                    <div class="btn btn-primary" @click="goBack()">
                      {{ $t('bloggers.video.back') }}
                    </div>
                  </th>
                  <th class="col-xs-4">{{ $t('bloggers.video.details.title') }}</th>
                  <th class="col-xs-4">{{ $t('bloggers.video.details.description') }}</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="video in videos">
                  <td class="col-xs-4"><img :src="video.image_url" :alt="video.title" style="max-width: 100%"></td>
                  <td class="col-xs-4"><a :href="video.url">{{video.title}}</a></td>
                  <td class="col-xs-4">{{video.description}}</td>
                </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
  import {mapGetters} from 'vuex'

  export default {
    components: {},
    computed  : {
      ...mapGetters({
        videos         : 'videos'
      })
    },
    data() {
      return {}
    },
    mounted() {
      this.fetch()
    },
    methods   : {
      fetch() {
        let bloggerId = this.$route.params.id;
        this.$store.dispatch('getVideos', bloggerId);
      },
      goBack() {
        let bloggerId = this.$route.params.id;
        this.$router.push({name: 'blogger', params: {id: bloggerId}})
      },
    },
    watch     : {
      '$route': 'fetch'
    }
  }
</script>