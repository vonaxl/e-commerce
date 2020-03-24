<template>
  <div>
    <!-- <Header v-on:filterProducts="filterProducts"/> -->
    <Header/>

    <div class="container">
      <router-view></router-view>
    </div>

    <Footer/>
  </div>
</template>

<script>
  import Header from './partials/Header.vue'
  import Footer from './partials/Footer.vue'

  export default {
    components: {
      Header,
      Footer
    },
    methods: {
      // filterProducts(value){
      //   console.log("sto cercando", value);
      // }
    }
  }
</script>