<template>
  <div>
    <!-- navbar -->
    <Navbar/>
  </div>
</template>

<script>
  import Navbar from './sub/Navbar.vue'

  export default {
    data(){
      return {

      }
    },
    name: 'Header',
    components: {
      Navbar
    }
  }
</script>

<style>

</style>