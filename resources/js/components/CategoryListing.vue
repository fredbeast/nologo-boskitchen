<template>
    <b-row>
        <b-col md="12">
            <b-link :to="{name: 'search', query: {type: type}}" @click="categorySelect(type)" >{{ type | capitalize }}</b-link>
            <hr>
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
        filters: {
            capitalize: function (value) {
                if (!value) return '';
                value = value.toString();
                return value.charAt(0).toUpperCase() + value.slice(1);
            }
        },
        props: ['type'],

    }
</script>