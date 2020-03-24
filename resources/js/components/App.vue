<template>
  <div>
    <b-navbar toggleable="lg" type="dark" variant="dark">
      <!-- Navbar home link -->
      <b-navbar-brand>
        <router-link :to="{ name: 'home' }">Home</router-link>
      </b-navbar-brand>
      <!-- Toogle menu button on mobile -->
      <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
      <b-collapse id="nav-collapse" is-nav>
        <!-- Left aligned nav items -->
        <b-navbar-nav>
          <b-nav-item>
            <router-link class="nav-link" to="/about">About</router-link>
          </b-nav-item>
          <b-nav-item>
            <router-link class="nav-link" to="/credits">Credits</router-link>
          </b-nav-item>
        </b-navbar-nav>
        <!-- Right aligned nav items -->
        <b-navbar-nav class="ml-auto"></b-navbar-nav>
      </b-collapse>
    </b-navbar>

    <div class="container">
        <router-view></router-view>
    </div>
  </div>
</template>

<script>
  export default {}
</script>