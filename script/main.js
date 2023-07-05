const { createApp } = Vue;

createApp({
  data() {
    return {
      apiUrl : './server.php',
      listDiscs:[],
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
            this.listDiscs = response.data;
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