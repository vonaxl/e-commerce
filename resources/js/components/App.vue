<template>
  <div>
    <!-- <Header v-on:filterProducts="filterProducts"/> -->
    <Header v-show="this.$route.name !== 'resultSearch'"/>

    <!-- Funziona ma
      abbiamo due opzioni:
        1) componente  header alternativo per la pagina di ricerca
        2) passare in qualche modo il nome della rotta e far gestire lo show al componenente navabar 
     -->

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