const { createApp } = Vue;

createApp({
  data() {
    return {
      apiUrl : './server.php',
      listDiscs:[],
      selectedDisc: false,
    }
  },
  methods: {
    getDisc(disc) {
        axios.get(this.apiUrl, {
          params: {
            discId: disc,
          }
        })
        .then(response => {
          console.log(response.data);
          this.selectedDisc = response.data;
          this.selectedDisc = true;
        })
        .catch(error => {
          console.log(error);
        });
      },
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


