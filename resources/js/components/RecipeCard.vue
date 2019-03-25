<template>
    <b-row class="text-center recipe-card"  v-bind:style="{ backgroundImage: 'url(' + image + ')', overflow : 'hidden' }">
        <b-col md="12" class="recipe-card-content my-auto">
            <h2>{{title_sm | capitalize}}</h2>
                <b-button :to="{ name: 'recipe', params: { id } }">View recipe</b-button>
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
            }
        },
        props: ['id', "title_sm", 'image']
    }
</script>