<template>
    <b-container>
        <b-row class="my-3">
            <b-col cols="12">
                <hr>
            </b-col>
        </b-row>
        <b-row class="my-3">
            <b-col cols="12" sm="7" offset-sm="1" class="">
                <h2>{{name}}</h2>
                <div v-html="description"></div>
            </b-col>
            <b-col cols="12" sm="3" class="">
                <a class="btn btn-primary" :href="link">Go To Partner</a>
            </b-col>
            <hr>
        </b-row>

    </b-container>
</template>
<script>
    import BContainer from "bootstrap-vue/src/components/layout/container";
    export default {
        components: {BContainer},
        props: ['id', 'name', 'description', 'link', 'color', 'kitchen'],
    }
</script>