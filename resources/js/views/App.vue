<template>
    <div id="app" class="app-wrapper">
        <Navbar></Navbar>

        <keep-alive>
            <transition name="fade" mode="out-in">
                <router-view></router-view>
            </transition>
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