<template>
    <b-container  v-bind:style="{ paddingTop: '75px' }" class="h-100">
        <b-row class="my-3">
            <b-col cols="12">
                <h2>My Kitchen</h2>
                <hr>
            </b-col>
        </b-row>
        <b-row class="my-3">
            <b-col cols="12" offset-sm="1" sm="10">
                <p>This is My Kitchen! A space where I list the resources I use and my partners that help me, without them Bo's Kitchen wouldn't be what it is today.</p>
            </b-col>
        </b-row>
        <kitchen-comp
                v-for="kitchen in kitchens"
                v-bind="kitchen"
                :key="kitchen.id"
        ></kitchen-comp>
    </b-container>
</template>
<script>
    function Kitchen({name, description, link, order, color}) {
        this.name = name;
        this.description = description;
        this.link = link;
        this.order = order;
        this.color = color;
    }
    import KitchenComp from '../components/KitchenComponent.vue';

    export default {
        name: 'MyKitchen',
        data(){
            return {
                kitchens: []
            }
        },
        methods: {
            myKitchenList() {
                axios
                    .get('/api/kitchens').then(({data}) => {
                    data.forEach(kitchen => {
                        this.kitchens.push(new Kitchen(kitchen));
                    });
                });                // To do
            },
        },
        components: {
            KitchenComp
        },
        created() {
            this.myKitchenList();
        }
    }
</script>