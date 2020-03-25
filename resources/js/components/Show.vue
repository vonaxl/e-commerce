<template>
  <div>
    {{product.name}} 
  </div>
</template>

<script>
  export default {
    data(){
      return {
        product: {}
      }
    },
    created(){
      console.log(this.$route.path)
      const _this = this;
      axios
        .get('http://127.0.0.1:3000/api' + this.$route.path)					
        .then(function(res) {
          _this.product = res.data;
        })
        .catch(error => console.log(error));
    }
  }
</script>

<style>
</style> 