<template>
    <div v-if="['recipe', 'register'].indexOf($route.name) < 0">
        <b-navbar type="light" variant="light" class="fixed-top mb-2">
            <b-navbar-brand to="/" v-if="$route.name!='search'">
                Bo's Kitchen
            </b-navbar-brand>

            <b-collapse is-nav id="nav_collapse">
                <b-navbar-nav class="float-left">
                    <b-nav-item @click="goBack()" v-if="$route.name=='search'"><i class="fa fa-arrow-left fa-lg"></i></b-nav-item>
                </b-navbar-nav>
                <b-navbar-nav class="mx-auto" v-show="!$route.query.type && $route.name=='search'">
                    <b-nav-item>CATEGORIES</b-nav-item>
                </b-navbar-nav>
                <b-navbar-nav class="mx-auto" v-show="$route.query.type">
                    <b-nav-item>{{$route.query.type | capitalize}}</b-nav-item>
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
        <b-navbar type="light" variant="light" class="fixed-bottom" id="navbarBottom">
                <!-- Right aligned nav items -->
                <b-navbar-nav class="mx-auto">
                    <b-nav-item to="/"><i class="fa fa-seedling d-xs-block d-sm-none"></i><span class="d-none d-sm-block">Recipes</span></b-nav-item>
                    <b-nav-item to="/about" class="icon-text"><div class="d-block d-sm-none">Bo</div><span class="d-none d-sm-block">Bo</span></b-nav-item>
                    <b-nav-item to="/kitchen"><i class="fa fa-list d-xs-block d-sm-none"></i><span class="d-none d-sm-block">My Kitchen</span></b-nav-item>
                    <b-nav-item to="/feedback"><i class="fa fa-comments d-xs-block d-sm-none"></i><span class="d-none d-sm-block">Feedback</span></b-nav-item>

                </b-navbar-nav>
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
        computed:{
            main(){
                return this.$route.path === '/'
            }
        }
    }
</script>
