<template>
    <b-container  v-bind:style="{ paddingTop: '54px' }" class="h-100">
        <transition-group name="fade">
            <recipe-card

                    v-for="recipe in recipes"
                    v-bind="recipe"
                    :key="recipe.id"
            ></recipe-card>
        </transition-group>

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
                recipes: []
            }
        },
        methods: {
            read() {
                axios.get('/api/recipes').then(({data}) => {
                    data.forEach(recipe => {
                        this.recipes.push(new Recipe(recipe));
                    });
                });                // To do
            },
        },
        components: {
            RecipeCard
        },
        created() {
            this.read();
        },

    }
</script>