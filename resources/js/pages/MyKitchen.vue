<template>

        <b-container v-bind:style="{ paddingTop: '75px' }" class="h-100">
            <b-row class="my-3">
                <b-col cols="12">
                    <h2>My Kitchen</h2>
                    <hr>
                </b-col>
            </b-row>
            <b-row class="my-3">
                <b-col cols="12">
                    <p>
                        This is my Kitchen! A resource for you to learn about a vegan kitchen. Here you can see some of the great products I use and the partners I work with. Without them, Bo’s Kitchen wouldn’t be what it is today.</p>
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