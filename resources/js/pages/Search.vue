<template>
    <b-container fluid v-bind:style="{ paddingTop: '54px' }">
        <transition-group name="fadeDelay">
            <category-listing
                    v-for="category in categories"
                    v-bind="category"
                    v-show="searchMode == 'category'"
                    :key="category.id"
                    @category-render="categoryRender"
            ></category-listing>
        </transition-group>
        <transition-group name="fadeDelay">
            <recipe-card
                    class="recipe-fade-search"
                    v-for="recipe in recipes"
                    v-show="searchMode == 'recipe'"
                    v-bind="recipe"
                    :key="recipe.id">
            </recipe-card>
        </transition-group>
        <transition name="fadeDelay">
            <b-row>
                <b-col xs="12" sm=6 offset-sm="3" class="text-center my-3">
                    <br>
                    <p v-if="searchMode == 'recipe'">Sorry! No more recipes in this category.</p>
                    <br>
                </b-col>
            </b-row>
        </transition>
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
                this.categories = [];
                this.searchMode = 'category';
                axios
                    .get('/api/categories').then(({data}) => {
                    data.forEach(category => {
                        this.categories.push(new Category(category));
                    });
                });                // To do
            },
            categoryRender(type) {
                this.searchMode = 'recipe';
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

        beforeRouteUpdate(to, from, next){
            if (this.searchMode === 'category') {
                this.searchMode = 'recipe'
            }
            if (from.query.type) {
                this.categoryList();
            }
            else {
                this.searchMode = 'category'
            }
            next();
        },
        mounted()
        {
            if (!['recipe', 'category'].includes(this.searchMode)) {
                if (this.$route.query.type) {
                    this.categoryRender(this.$route.query.type);
                }
                else {
                    this.searchMode = 'category';
                    this.categoryList();
                }
            }
        }


    }
</script>