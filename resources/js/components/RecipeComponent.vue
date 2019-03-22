<template>
    <b-col xs="12">
        <h1>Title = {{ recipe.title }}</h1>
        <h2>Title_sm = {{ recipe.title_sm }}</h2>
        <h2>Title_sm = {{ recipe.image }}</h2>
        <h2>Title_sm = {{recipe.post}}</h2>
        <b-img :src="recipe.image" fluid-grow />
    </b-col>
</template>
<script>
    export default {

        props: ['id', 'title','title_sm', 'image', 'post', 'prep', 'cook', 'ingredients', 'instructions', 'recipe']
    }
</script>