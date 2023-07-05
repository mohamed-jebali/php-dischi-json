const { createApp } = Vue;

createApp({
  data() {
    return {
      message: 'Hello Vue!',
      apiUrl : './server.php',
      list:[],
    }
  },
  methods: {
    axiosCall(){
        axios.get(this.apiUrl, {
            params: {

            }
          })
          .then(function (response) {
            console.log(response.data);
            this.list = response.data;
          })
          .catch(function (error) {
            console.log(error);
          })
    }
  },
  created() {
    this.axiosCall();
},
}).mount('#app');