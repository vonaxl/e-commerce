<template>
  <div>
    <b-navbar toggleable="lg" type="dark" variant="info">
      <b-navbar-brand href="#">
        <router-link :to="{ name: 'home' }">Home</router-link>
      </b-navbar-brand>

      <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

      <b-collapse id="nav-collapse" is-nav>
        <!-- <b-navbar-nav>
          <b-nav-item href="#">
            <router-link :to="{ name: 'about' }">About</router-link>
          </b-nav-item>          
        </b-navbar-nav> -->

        <!-- Right aligned nav items -->
        <b-navbar-nav class="ml-auto">
          <b-nav-form>
            <b-form-input size="sm" class="mr-sm-2" v-model="navSearch"></b-form-input>
            <router-link v-show="state" :to="'/search/' + navSearch" class="btn-sm btn-danger my-2 my-sm-0" >
              <span v-on:click="productSearch">Search</span>
            </router-link>
          </b-nav-form>

          <!-- <b-nav-item-dropdown right>
            <template v-slot:button-content>
              <em>User</em>
            </template>
            <b-dropdown-item href="#">Profile</b-dropdown-item>
            <b-dropdown-item href="#">Sign Out</b-dropdown-item>
          </b-nav-item-dropdown> -->
        </b-navbar-nav>
      </b-collapse>
    </b-navbar>
  </div>
</template>

<script>
export default {
  name: 'Navbar',
  data(){
    return {
      navSearch: "",
      state: false,
    }
  },
  watch: {
    // navSearch: function(value) {
    //   console.clear();
    //   this.$emit('navSearch', value);
    // },
    navSearch: function(input) {
      if(input.length > 0) {
        this.state = true;
      } else {
        this.state = false;
      }
    }
  },
  methods: {
    productSearch(){
      setTimeout(() => {
        this.navSearch = "";
      }, 50);
    }
  }
}
</script>

<style>

</style>