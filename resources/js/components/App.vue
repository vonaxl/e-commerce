<template>
    <div>
        <Header />
        <div class="container">
            <router-view></router-view>
        </div>
        <Footer />
    </div>
</template>

<script>
import Header from "./partials/Header.vue";
import Footer from "./partials/Footer.vue";

export default {
	components: {
		Header,
		Footer
	}
};
</script>
