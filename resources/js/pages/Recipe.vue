<template>
        <transition name="fade">
            <recipe-component v-bind:recipe="recipe"></recipe-component>
        </transition>
</template>
<script>
    import RecipeComponent from '../components/RecipeComponent.vue';

    export default {
        name: 'Recipe',
        data (){
            return {
                recipe: []
            }
        },

        components: {
            RecipeComponent
        },
        mounted() {
            const itemId = this.$route.params.id;
            axios
                .get('/api/recipes/' + itemId)
                .then(response => (this.recipe = response.data))
        },

    }
</script>