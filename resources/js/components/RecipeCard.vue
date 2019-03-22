<template>
    <b-row>
        <b-col md="12" v-bind:style="{ backgroundImage: 'url(' + image + ')', overflow : 'hidden' }">
            <h1>{{title_sm}}</h1>
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