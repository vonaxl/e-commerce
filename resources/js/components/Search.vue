<template>
	<div>
		<h1>Risultati ricerca per: {{ $route.params.navSearch }}</h1>
		<hr>
		<div class="row">
			<div class="col-12 col-md-4">
				<h4>Sidebar</h4>
				<input type="text" v-model="navSearch" />
				<router-link 	v-show="state" :to="'/search/' + navSearch" class="btn-sm btn-danger my-2 my-sm-0">
						<span @click="searchProdutcs(navSearch)">Search</span>
				</router-link>
				<hr>
				<h4>Filters</h4>
				<div>
					<h5>Categories</h5>
					<ul>
						<li v-for="category in categories" v-bind:key="category.id">{{ category.title }}</li>
					</ul>
				</div>
			</div>
			<div class="col-12 col-md-8">
				<h4>Products list</h4>
				<ul v-if="results.length > 0">
					<li v-for="product in results" v-bind:key="product.id">
						{{ product.name }} - €{{ product.price }}
					</li>
				</ul>
				<div v-else-if="results.length < 1">
					<img src="https://image.freepik.com/free-vector/error-404-found-glitch-effect_8024-4.jpg" alt=""/>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	export default {
		name: "Search",
		data() {
			return {
				results: {},
				navSearch: "",
				state: false,
				categories: {}
			};
		},
		created(){
			const _this = this;
			axios
				.get("http://127.0.0.1:3000/api/categories/")
				.then(function(res) {
					console.log("Categorie",res);
					_this.categories = res.data;
				})
				.catch(error => console.log(error));
		},
		watch: {
			navSearch: function(input) {
				if (input.length > 0) {
					this.state = true;
				} else {
					this.state = false;
				}
			}
		},
		mounted() {
			this.searchProdutcs(this.$route.params.navSearch);
		},
		methods: {
			searchProdutcs(param) {
				const _this = this;
				axios
					.get("http://127.0.0.1:3000/api/search/" + param)
					.then(function(res) {
						_this.navSearch = "";
						_this.results = res.data.products;
						console.log(res);
						
					})
					.catch(error => console.log(error));
			}
		}
	};
</script>

<style></style>
