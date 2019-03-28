<template>
    <b-row class="text-center recipe-card " @click="toRecipe(id)"
           v-bind:style="{ backgroundImage: 'url(' + image + ')', overflow : 'hidden' }">
        <div class="recipe-card-cover"></div>
        <b-col cols="10" offset="1" sm="6" offset-sm="3" class="recipe-card-content my-auto">
            <div class="recipe-card-content-wrapper">
                <div class="recipe-card-inner-wrapper">
                    <h2 class="recipe-card-content-title">{{title_sm | allcaps}}</h2>
                </div>
            </div>
        </b-col>
    </b-row>
</template>
<script>
    export default {
        methods: {
            update(val) {
                this.$emit('update', this.id, val.target.selectedOptions[0].value);
            },
            del() {
                this.$emit('delete', this.id);
            },
            toRecipe(id){
                this.$router.push({name: 'recipe', params: {id: id}})
            }
        },
        props: ['id', "title_sm", 'image', 'recipe']
    }
</script>