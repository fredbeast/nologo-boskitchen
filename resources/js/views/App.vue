<template>
    <div id="app" class="app-wrapper">
        <Navbar></Navbar>
        <router-view></router-view>
    </div>
</template>

<script>
    import Navbar from '../components/TheNavbar.vue';
    export default {
        name: 'app',
        components: {
            Navbar
        }
    }
</script>