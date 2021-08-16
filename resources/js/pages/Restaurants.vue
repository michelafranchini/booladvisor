<template>
    <div class="container text-center">
        <h1 class="my-5">Ecco i nostri ristoranti</h1>
        <SingleRestaurant 
        :restaurant= "restaurant"
        v-for="restaurant in restaurants"
        :key="restaurant.id"
        />
    </div>
</template>

<script>
import SingleRestaurant from '../components/SingleRestaurant.vue'

export default {
    name: 'Restaurants', 
    components: {
        SingleRestaurant
    }, 

    data() {
        return {
            restaurants: []
        }
    }, 

    methods: {
        getRestaurants() {
            axios
            .get('http://127.0.0.1:8000/api/restaurants')
            .then(
                result => {
                    //console.log(result.data)
                    this.restaurants = result.data; 
                }
            )
        }
    }, 

    created() {
        this.getRestaurants(); 
    }
}
</script>

<style lang="scss" scoped>
    .container {
        margin: auto;
    }
</style>