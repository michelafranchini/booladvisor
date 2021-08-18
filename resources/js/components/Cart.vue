<template>
    <div class="cart_container my-5 mx-3 text-center">
        <h3 class="my-2">Il tuo ordine</h3>
        <hr>
        <div class="order_box">
            <div class="d-flex justify-content-between align-items-center"
            v-for="singlePlate in platesInCart"
            :key=singlePlate.plate.id>
                <h4 class="counter">{{singlePlate.plateCounter}}</h4>
                <h4 class="name">{{singlePlate.plate.name}}</h4>
                <h4 class="price">{{subTotalPlates(singlePlate.plateCounter, singlePlate.plate.price)}}€</h4>
                <h4 class="delete" @click="deletePlate(singlePlate)">x</h4>
            </div>
        </div>
        <h4>Totale</h4>
        <h2>{{total}}€</h2>

        <button class="btn btn-outline-warning">Ordina</button>
        

    </div>
</template>

<script>
// import Plate from '../components/Plate.vue'; 

export default {
    name: "Cart", 
    props: ['plate','plateCounter'], 
    data() {
        return {
            platesInCart: [],
            total: 0 
        }
    },
    
    watch: {
        plateCounter() {
            // if(this.platesInCart.length == 0) {
            //     this.platesInCart.push({plate: this.plate, plateCounter :this.plateCounter})
            // } 
            // this.platesInCart.forEach(allInfoPlate => {

            //     if(allInfoPlate.plate.id != this.plate.id) {
            //         this.platesInCart.push({plate: this.plate, plateCounter :this.plateCounter})
            //     } else {
            //         this.plateCounter = allInfoPlate.plateCounter;
            //     }
                
            //     console.log(allInfoPlate);
            // })
            // };
            this.platesInCart.push({plate: this.plate, plateCounter :this.plateCounter})
            
            this.total += this.subTotalPlates(this.plateCounter, this.plate.price)


        }, 

    }, 

    methods: {
        subTotalPlates(plateCounter, price) {
            return plateCounter * price; 
        }, 

        deletePlate(plate) {
            this.platesInCart.splice(plate.plate);
            console.log(plate.plate);
            this.total -= this.total; 
        }
    }, 
    
}
</script>

<style lang="scss" scoped>
    .cart_container {
        border: 1px solid rgba(0,0,0,.125);
        position: fixed;
        height: 600px;
        width: 300px;
    }

    .order_box {
        padding: 20px;

        .counter {
            padding: 4px 8px;
            border-radius: 5px;
            font-size: 20px;
            background-color: #f36d00;
        }
        .price {
            color: #f36d00; 
        }

        .delete {
            font-size: 15px;
            cursor: pointer;
            color: lightgray;

            &:hover {
                color: black;
            }
        }
    }

</style>