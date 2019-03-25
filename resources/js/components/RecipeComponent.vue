<template>
    <div>
        <b-container style="padding: 0">
            <b-row>
                <b-col xs="12">
                    <div class="recipe-comp-img-wrap">
                        <router-link to="/" class="recipe-comp-img-back"><i class="fa fa-arrow-left fa-inverse fa-lg"></i></router-link>
                        <b-img :src="recipe.image" fluid-grow/>
                    </div>

                </b-col>
            </b-row>
        </b-container>
        <b-container>
            <b-row>
                <b-col xs="12" class="text-center">
                    <h2 class="recipe-comp-img-title mt-4 mb-2"> {{ recipe.title }}</h2>
                    <hr>
                </b-col>
            </b-row>
            <b-row>
                <b-col xs="4" v-if="recipe.cook">
                    <p>COOK TIME</p>
                    <h3>{{recipe.cook}} mins</h3>
                </b-col>
                <b-col xs="4" v-if="recipe.prep">
                    <p>PREP TIME</p>
                    <h3>{{recipe.prep}} mins</h3>
                </b-col>
                <b-col xs="4">
                    <p>TOTAL TIME</p>
                    <h3>{{recipe.cook + recipe.prep}} mins</h3>
                </b-col>
            </b-row>
            <b-row>
                <b-col xs="12" v-if="recipe.post">
                    <hr>
                    <div v-html="recipe.post"></div>
                </b-col>
            </b-row>
            <b-row>
                <b-col xs="12" v-if="recipe.post">
                    <b-tabs content-class="mt-3">
                        <b-tab title="Ingredients" active>
                            <div v-html="recipe.ingredients"></div>
                        </b-tab>
                        <b-tab title="Instructions">
                            <div v-html="recipe.instructions"></div>
                        </b-tab>
                    </b-tabs>
                </b-col>
            </b-row>
        </b-container>
    </div>
</template>
<script>
    export default {
        props: ['id', 'title', 'title_sm', 'image', 'post', 'prep', 'cook', 'ingredients', 'instructions', 'recipe']
    }
</script>