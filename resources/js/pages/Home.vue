<template>
    <b-container v-bind:style="{ paddingTop: '54px' }">
        <div>
            <recipe-card
                    v-for="recipe in recipes"
                    v-bind="recipe"
                    :key="recipe.id"
            ></recipe-card>
            <div v-infinite-scroll="loadMore" infinite-scroll-disabled="busy" infinite-scroll-distance="0"
                 infinite-scroll-throttle-delay="1000"
                 class="text-center">
                <div class="lds-ring mx-auto"><div></div><div></div><div></div><div></div></div>
            </div>

        </div>
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