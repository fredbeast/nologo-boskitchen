<template>
    <b-row>
        <b-col cols="12" sm="7" offset-sm="1" class="">
            <h2>{{name}}</h2>
            <p>{{description}}</p>
        </b-col>
        <b-col cols="12" sm="3" class="">
            <a class="btn btn-primary float-right" href="#">Go To Partner</a>
        </b-col>
        <hr>
    </b-row>
</template>
<script>
    export default {
        props: ['id', 'name', 'description', 'link','color', 'kitchen'],
    }
</script>