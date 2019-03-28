<template>
    <div class="recipe-comp">
        <b-container style="padding: 0" fluid>
            <b-row class="text-center">
                <b-col cols="12">
                    <div class="top-img-full"
                         v-bind:style="{ backgroundImage: 'url(' + recipe.image + ')'}">
                        <router-link to="/" class="recipe-comp-img-back"><i
                                class="fa fa-arrow-left fa-inverse fa-lg"></i>
                        </router-link>
                    </div>
                </b-col>
            </b-row>
        </b-container>
        <b-container>
            <b-row>
                <b-col cols="12" class="text-center">
                    <h2 class="recipe-comp-img-title mt-4 mb-2"> {{ recipe.title }}</h2>
                    <hr>
                </b-col>
            </b-row>
            <b-row>
                <b-col cols="4" v-if="recipe.cook">
                    <p>COOK TIME</p>
                    <h4>{{recipe.cook}} mins</h4>
                </b-col>
                <b-col cols="4" v-if="recipe.prep">
                    <p>PREP TIME</p>
                    <h4>{{recipe.prep}} mins</h4>
                </b-col>
                <b-col cols="4">
                    <p>TOTAL TIME</p>
                    <h4>{{total}} mins</h4>
                </b-col>
            </b-row>
            <b-row>
                <b-col cols="12" v-if="recipe.post">
                    <hr>
                    <div v-html="recipe.post"></div>
                </b-col>
            </b-row>
            <b-row>
                <b-col cols="12" v-if="recipe.post">
                    <hr>
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
        props: ['id', 'title', 'title_sm', 'image', 'post', 'prep', 'cook', 'ingredients', 'instructions', 'recipe'],
        computed: {
            total: function(){
                return this.recipe.cook + this.recipe.prep;
            }
        }
    }
</script>