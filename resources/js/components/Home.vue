<template>
<div>
  <Carousel/>
  <div class="row">
    <!--  -->
    <router-link  v-for="product in products" v-bind:key="product.id" 
      :to="'/show/' + product.id">
      <b-card  
        :title="product.name"
        img-src="https://picsum.photos/600/300/?image=25"
        img-alt="Image"
        img-top
        tag="article"
        style="max-width: 20rem;"
        class="col-3"
      >
        <b-card-text>
          Some quick example text to build on the card title and make up the bulk of the card's content.
        </b-card-text>
      </b-card>
    </router-link>
  </div>
  <!-- <ul class="list-unstyled">
    <li >{{ product.name }}</li>
  </ul> -->
</div>
</template>

<script>
import Carousel from './partials/sub/Carousel'
export default {
  components : {
    Carousel
  },
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