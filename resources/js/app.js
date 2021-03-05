require('./bootstrap');
import axios from 'axios';
import Vue from 'vue/dist/vue.js'

const app = new Vue({
  el: '#app',
  data(){return{
    user_id: 1,
    mac: '000000',
    notFound: false
  }},
  methods:{
    asignar(){
      this.notFound = false
      let data = {
        user_id: this.user_id,
        mac: this.mac
      }
      let that = this
      axios.post('/asignar', data).then(function(res){
        console.log( res.data );
      }).catch(function(err){
        if( err.response.status == '404' ){
          that.notFound = true
        }
      })
    }
  }
})