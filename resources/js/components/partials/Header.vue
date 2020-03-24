<template>
  <div>
    <!-- navbar -->
    <Navbar v-on:navSearch="getNavSearch"/>
    {{headerSearch}}
  </div>
</template>

<script>
  import Navbar from './sub/Navbar.vue'

  export default {
    name: 'Header',
    components: {
      Navbar
    },
    data(){
      return {
      }
    },
    methods: {
      getNavSearch(value){
        this.$emit('filterProducts', value);
      }
    }
  }
</script>

<style>

</style>