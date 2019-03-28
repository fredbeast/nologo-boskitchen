<template>
    <b-row>
        <b-col md="12">
            <div v-bind:style="{ marginTop: '16px', marginBottom:'16px'}">
                <b-link :to="{name: 'search', query: {type: type}}" @click="categorySelect(type)">{{ type | capitalize }}
                </b-link>
            </div>
            <hr v-bind:style="{ margin: '0' }">
        </b-col>
    </b-row>
</template>
<script>
    export default {
        methods: {
            categorySelect(category) {
                this.$emit('category-render', category)
            },
        },
        props: ['type'],

    }
</script>