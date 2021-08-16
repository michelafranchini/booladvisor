<template>
    <div class="text-center">
        <h1 class="my-5">I nostri piatti</h1>
        <Plate 
        v-for="plate in plates"
        :key= plate.id 
        :plate = "plate"/>
    </div>
</template>

<script>
import Plate from '../components/Plate.vue'; 

export default {
    name: "Plates", 
    components: {
        Plate
    },
    data() {
        return {
            plates: []
        }
    }, 

    methods: {
        getPlates(id) {
            axios
            .get(`http://127.0.0.1:8000/api/restaurants/${id}/plates`)
            .then(
                result => {
                    //console.log(result);
                    this.plates = result.data

                }
            )
        }
    }, 
    created() {
        this.getPlates(this.$route.params.id); 
    }
}
</script>

<style>

</style>