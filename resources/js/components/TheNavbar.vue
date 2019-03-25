<template>
    <div v-if="['recipe', 'register'].indexOf($route.name) < 0">
        <b-navbar type="light" variant="light" class="fixed-top mb-2">
            <b-navbar-brand to="/" v-if="$route.name!='search'">
                <img src="https://i.postimg.cc/3x79NXHz/Logo.png" width="235" height="30" alt="Bo"/>
            </b-navbar-brand>

            <b-collapse is-nav id="nav_collapse">
                <b-navbar-nav>
                    <b-nav-item @click="goBack()" v-if="$route.name=='search'">Back</b-nav-item>
                </b-navbar-nav>
                <b-navbar-nav class="mx-auto" v-show="$route.query.type">
                    <b-nav-item class="mx-auto">{{$route.query.type | capitalize}}</b-nav-item>
                </b-navbar-nav>
                <!-- Right aligned nav items -->
                <b-navbar-nav class="ml-auto">
                    <b-nav-item to="/search" v-if="$route.name!='search'">Search</b-nav-item>
                    <b-nav-form v-if="['search'].indexOf($route.name) > 2">
                        <b-form-input size="sm" class="mr-sm-2" type="text" placeholder="Search Recipes"/>
                    </b-nav-form>
                </b-navbar-nav>
            </b-collapse>
        </b-navbar>
        <b-navbar type="light" variant="light" class="fixed-bottom">
            <b-collapse is-nav id="_2">
                <b-navbar-nav>
                </b-navbar-nav>

                <!-- Right aligned nav items -->
                <b-navbar-nav class="mx-auto">
                    <b-nav-item to="/">Home</b-nav-item>
                    <b-nav-item to="/about">Bo</b-nav-item>
                    <b-nav-item to="/life">My Kitchen</b-nav-item>
                    <b-nav-item to="/">Feedback</b-nav-item>

                </b-navbar-nav>
            </b-collapse>
        </b-navbar>
    </div>
</template>
<script>
    export default {
        methods: {
            goBack() {
                if (this.$route.query.type) {
                    this.$router.push('search');
                }
                else {
                    this.$router.push('/');
                }
            }
        },
    }
</script>
