<template>
    <div class="container text-center">
        <h1 class="my-5">{{restaurant.name}}</h1>
        <img :src=" '/storage/' + restaurant.image" :alt="restaurant.name">
        <div class="my-5">
            <h3>{{restaurant.address}}</h3>
            <h3>{{restaurant.phone}}</h3>
            <h3>{{restaurant.email}}</h3>
        </div>
        <p>{{restaurant.description}}}</p>
    </div>
</template>

<script>
export default {
    name: "Restaurant",
    
    data() {
        return {
            restaurant: ""
        }
    }, 

    methods: {
        getRestaurant(slug) {
            axios
            .get(`http://127.0.0.1:8000/api/restaurants/${slug}`)
            .then(
                result => {
                    //console.log(result);
                    this.restaurant = result.data; 
                }
            )
        }
    }, 

    created() {
        this.getRestaurant(this.$route.params.slug); 
    }
}
</script>

<style>
    
</style>