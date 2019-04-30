<template>
    <div id="app" class="app-wrapper">
        <Navbar></Navbar>
        <keep-alive>
            <router-view></router-view>
        </keep-alive>
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