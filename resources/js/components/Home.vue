<template>
  <ul class="list-unstyled">
    <li v-for="product in products" v-bind:key="product.id">{{ product.name }}</li>
  </ul>
</template>

<script>
export default {
  data(){
    return {
      products: [],
    }
  },
  created(){
    const _this = this;
    axios
      .get('http://127.0.0.1:3000/api/products')					
      .then(function(res) {
        console.log(res.data);
        _this.products = res.data;
      })
      .catch(error => console.log(error));
  }
}
</script>

<style>

</style>