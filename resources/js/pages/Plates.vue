<template>
    <div class="container d-flex text-center">
        <div>
            <h1 class="my-5">I nostri piatti</h1>
            <Plate 
            v-for="plate in plates"
            :key= plate.id 
            :plate="plate"
            @addPlateCart="getPlateCart"/>
        </div>
        <aside>
            <Cart 
            :plate="plate"
            :plateCounter="plateCounter"/>
        </aside>
    </div>
</template>

<script>
import Plate from '../components/Plate.vue'; 
import Cart from '../components/Cart.vue'; 

export default {
    name: "Plates", 
    components: {
        Plate, 
        Cart
    },
    data() {
        return {
            plates: [], 
            plate: {}, 
            plateCounter: null
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
        }, 

        getPlateCart({plate, plateCounter}) {
            this.plate = plate; 
            this.plateCounter = plateCounter; 
        }

    }, 
    created() {
        this.getPlates(this.$route.params.id); 
    }, 

}
</script>

<style>

</style>