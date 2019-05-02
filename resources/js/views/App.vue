<template>
    <div id="app" class="app-wrapper">
        <Navbar></Navbar>
        <transition name="fade" mode="out-in">
            <keep-alive include="Home">
                <router-view></router-view>
            </keep-alive>
        </transition>
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