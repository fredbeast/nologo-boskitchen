<template>
    <b-container v-bind:style="{ paddingTop: '54px' }">
        <div>
            <transition-group name="fade">
                <recipe-card
                        v-for="recipe in recipes"
                        v-bind="recipe"
                        :key="recipe.id"
                ></recipe-card>
            </transition-group>
            <div v-infinite-scroll="loadMore" infinite-scroll-disabled="busy" infinite-scroll-distance="10" class="text-center">
                <div class="loader mx-auto">Loading...</div>
                <p>Grabbing some more recipes!</p>
            </div>

        </div>
        <!--
        @update="update"
        @delete="del"
        -->
    </b-container>
</template>
<script>

    function Recipe({id, title_sm, image}) {
        this.id = id;
        this.title_sm = title_sm;
        this.image = image;
    }

    import RecipeCard from '../components/RecipeCard.vue';

    export default {
        name: 'Home',
        data() {
            return {
                recipes: [],
                page: 0,
                busy: false
            }
        },
        methods: {
            loadMore() {
                this.page++;
                this.busy = true;
                axios.get('/api/recipes?page=' + this.page).then(({data}) => {
                    data.data.data.forEach(recipe => {
                        this.recipes.push(new Recipe(recipe));
                        this.busy = false;
                    });
                });                // To do
            },
        },
        components: {
            RecipeCard
        },
        mounted() {
            this.loadMore();
        },

    }
</script>