<template>
    <b-container fluid v-bind:style="{ marginTop: '60px' }">
        <category-listing
                v-for="category in categories"
                v-bind="category"
                v-if="searchMode == 'category'"
                :key="category.id"
                @category-render="categoryRender"
        ></category-listing>
        <transition-group name="fade">
            <recipe-card
                    class="recipe-fade-search"
                    v-for="recipe in recipes"
                    v-if="searchMode == 'recipe'"
                    v-bind="recipe"
                    :key="recipe.id">
            </recipe-card>
        </transition-group>
    </b-container>
</template>
<script>

    function Recipe({id, title_sm, image}) {
        this.id = id;
        this.title_sm = title_sm;
        this.image = image;
    }

    function Category({id, type}) {
        this.id = id;
        this.type = type;
    }

    import RecipeCard from '../components/RecipeCard.vue';
    import CategoryListing from '../components/CategoryListing.vue';

    export default {
        name: 'Search',
        data() {
            return {
                categories: [],
                recipes: [],
                searchMode: ''
            }
        },
        methods: {
            categoryList() {
                axios
                    .get('/api/categories').then(({data}) => {
                    data.forEach(category => {
                        this.categories.push(new Category(category));
                    });
                });                // To do
            },
            categoryRender(type) {
                this.searchMode = 'recipe';
                console.log('rendered!');
                this.recipes = [];
                axios
                    .get('/api/search', {
                        params: {
                            type: type
                        }
                    })
                    .then(({data}) => {
                        data.forEach(recipe => {
                            this.recipes.push(new Recipe(recipe));
                        })
                    });
            },
        },
        components: {
            CategoryListing,
            RecipeCard
        },

        beforeRouteUpdate(to,from,next){
            if(this.searchMode === 'category'){
                this.categoryRender(to.query.type);
                this.searchMode = 'recipe'
            }
            else {
                this.searchMode = 'category'
            }
            next();
        },
        mounted()
        {
            if (!['recipe','category'].includes(this.searchMode)) {
                this.searchMode = 'category';
                this.categoryList();
                console.log("listed! and first and last");
            }
        }


    }
</script>