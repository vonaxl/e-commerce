<template>
    <div>
        <!-- ? METTERE UNA NAVBAR APPOSITA ? -->

        <h1>Risultati ricerca per: {{ $route.params.navSearch }}</h1>
        <!-- <button @click="nuovaRicerca">Cerca di nuovo</button> -->

        <input type="text" v-model="navSearch" />
        <router-link
            v-show="state"
            :to="'/search/' + navSearch"
            class="btn-sm btn-danger my-2 my-sm-0"
        >
            <span @click="searchProdutcs(navSearch)">Search</span>
        </router-link>
        <hr />
        <ul v-if="results.length > 0">
            <li v-for="product in results" v-bind:key="product.id">
                {{ product.name }}
            </li>
        </ul>
        <div v-else-if="results.length < 1">
            <img
                src="https://image.freepik.com/free-vector/error-404-found-glitch-effect_8024-4.jpg"
                alt=""
            />
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
            state: false
        };
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
                    console.log(res);
                    _this.results = res.data.products;
                })
                .catch(error => console.log(error));
        }
    }
};
</script>

<style></style>
