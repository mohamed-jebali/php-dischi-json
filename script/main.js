const { createApp } = Vue;

createApp({
  data() {
    return {
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
          .then(response =>  {
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