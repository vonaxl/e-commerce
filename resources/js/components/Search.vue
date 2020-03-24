<template>
  <div>
    <h1>Risultati ricerca per: {{ $route.params.navSearch }}</h1>
    <button @click="nuovaRicerca">Cerca di nuovo</button>
    <input type="text" v-model="input">
    <hr>
    <ul>
      <li v-for="product in results" v-bind:key="product.id">{{ product.name }}</li>
    </ul>
  </div>
</template>

<script>
export default {
  name: 'Search',
  data(){
    return {
      results: {},
      input: ""
    }
  },
  mounted(){
    this.searchProdutcs(this.$route.params.navSearch);
  },
  methods: {
    searchProdutcs(param){
      const _this = this;
      axios
        .get('http://127.0.0.1:3000/api/search/' + param)					
        .then(function(res) {
          console.clear();
          console.log(res);
          _this.results = res.data.products;
        })
        .catch(error => console.log(error));
    },
    nuovaRicerca(){
      console.log("nuova ricerca");
      this.searchProdutcs(this.input);
    }
  }
}
</script>

<style>

</style>