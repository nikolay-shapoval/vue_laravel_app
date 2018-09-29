<template>
  <div id="main-block" class="main-block">
    <div id="main-scroll" class="main-block_inner">
      <!--content-->
      <form class="content form add-tourist" role="form">
        <input type="hidden" name="_token" :value="csrf">
        <div class="row">
          <div class="col-lg-12 lev-1">
            <div class="row">
              <div class="col-lg-4 lev-2">
                <div class="box add-tourist_self">
                  <div class="form-group add-tourist_photo form_file">
                    <label for="photo">
                      <img class="photo" :src="blogger.photo_link" alt="" style="max-height: 164px" id="channel_photo"/>
                    </label>
                    <input type="file" name="photo" id="photo" ref="file" @change="addFile()" accept="image/jpeg,image/png,image/gif"/>
                  </div>
                  <div class="info-panel">
                    <p><span class="info-panel_t">{{ $t('bloggers.blogger.published') }}:</span>
                      <br/>{{blogger.published_at}}
                    </p>
                    <p><span class="info-panel_t">{{ $t('bloggers.blogger.category') }}:</span>
                      <br/>
                    </p>
                    <hr class="info-panel_hr"/>
                    <p><span class="info-panel_t">ID:</span>&nbsp;{{blogger.id}}
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-8 lev-2">
                <div class="box add-tourist_self">
                  <h2 class="box_t">{{ $t('bloggers.blogger.title') }}</h2>
                  <div class="row">
                    <div class="col-lg-12 lev-3">
                      <div class="form-group">
                        <label for="name">{{ $t('bloggers.blogger.name') }}</label>
                        <input v-bind:title="blogger.title" type="text" v-model="blogger.title" class="form-control" id="name">
                      </div>
                      <div class="form-group">
                        <label style="cursor: pointer" @click="openLink()" for="url">{{ $t('bloggers.blogger.url') }}</label>
                        <input type="text" v-bind:title="blogger.url" v-model="blogger.url" class="form-control" id="url">
                      </div>
                      <div class="form-group">
                        <label for="description">{{ $t('bloggers.blogger.description') }}</label>
                        <input type="text" v-bind:title="blogger.description" v-model="blogger.description" class="form-control" id="description">
                      </div>
                      <div class="row">
                        <div class="col-lg-6 lev-3">
                          <div class="btn-row">
                            <button @click.prevent="showVideo(blogger)" v-bind:title="$t('bloggers.video.tooltip')" type="submit" class="btn">{{ $t('bloggers.video.title') }}</button>
                          </div>
                        </div>
                        <div class="col-lg-6 lev-3">
                          <div class="btn-row" style="float:right">
                            <button @click.prevent="updateBlogger(blogger)" class="btn bt-sub">{{ $t('bloggers.blogger.save') }}</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
      <form class="content form add-comment" role="form">
        <div class="row">
          <div class="col-lg-12 lev-1">
            <div class="box">
              <table class="table">
                <tbody>
                <tr v-for="comment in blogger.comments">
                  <td v-html="comment.text">{{comment.text}}</td>
                </tr>
                </tbody>
                <h3>{{ $t('bloggers.comments.header') }}</h3>
                <vue-editor v-model="new_comment" :editorOptions="editorSettings"></vue-editor>
                <div class="row">
                  <div class="col-lg-12 lev-3">
                    <div class="btn-row" style="float:right">
                      <button @click.prevent="sendComment()" class="btn bt-sub">{{ $t('bloggers.comments.send') }}</button>
                    </div>
                  </div>
                </div>
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
  import { VueEditor, Quill } from 'vue2-editor'

  export default {
    components: {
      VueEditor
    },
    computed  : {
      ...mapGetters({
        blogger        : 'blogger',
        current_blogger: 'current_blogger',
      })
    },
    data      : () => ({
      csrf       : document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
      new_comment: '',
      editorSettings: {
        modules: {
          toolbar: {
            container: [
              ['bold', 'italic', 'underline', 'strike'],
              ['blockquote', 'code-block']
            ]
          },
        }
      },
    }),
    mounted() {
      this.fetch()
    },
    methods   : {
      fetch() {
        let bloggerId = this.$route.params.id;
        this.$store.dispatch('getBlogger', bloggerId);
      },
      openLink() {
        window.open(this.blogger.url, '_blank');
      },
      showVideo(blogger) {
        this.$router.push({name: 'videos', params: {id: blogger.id}})
      },
      updateBlogger() {
        let params = this.blogger;
        params.csrf = this.csrf;
        this.$store.dispatch('updateBlogger', params);
      },
      sendComment() {
        console.log(this.blogger);
        if(this.new_comment){
          let params = {};
          params.csrf = this.csrf;
          params.type = 'comment';
          params.text = this.new_comment;
          params.item_id = this.blogger.id;
          params.is_visible = 1;
          this.blogger.comments.push(params);
          this.$store.dispatch('sendComment', params).then(this.new_comment = null);
        }else{
          alert(this.$t('bloggers.comments.empty'));
        }
      },
      addFile(){
        let params = new FormData();
        params.append("attachment", $('#photo')[0].files[0]);
        params.append("channel_id", this.blogger.id);
        this.$store.dispatch('addFile', params);
      }
    },
    watch     : {
      '$route': 'fetch'
    }
  }
</script>
