<template>
    <div class="container my-3">
        <div class="card w-100">
            <div class="card-body d-flex justify-content-between align-items-center" >
                <div class="image_container">
                    <img :src="'/storage/'+ plate.image" :alt="plate.name">
                </div>
                <div class="text_container">
                    <h4 class="card-title">{{ plate.name }}</h4>
                    <h5 class="price">{{plate.price}}€</h5>
                    <p>{{plate.ingredients}}</p>
                </div>
                <div>
                    <div class="d-flex justify-content-center align-items-center">
                        <i class="fas fa-minus-square" v-on:click="decrease"></i>
                        <h3>{{plateCounter}}</h3>
                        <i class="fas fa-plus-square" v-on:click="increase"></i>
                    </div>
                    <div class="my-3">
                        <button class="btn btn-outline-warning" @click="plateInfo()">Aggiungi</button>
                    </div>
                </div>
            </div>
        </div>       
    </div>
</template>

<script>
export default {
    name: "Plate", 
    props: ['plate'], 

    data() {
        return {
            plateCounter: 1
        }
    }, 

    methods: {
        increase() {
            this.plateCounter++; 
        }, 

        decrease() {
            if(this.plateCounter <= 1) {
                return this.plateCounter; 
            } else {
                this.plateCounter--; 
            }
        }, 

        plateInfo() {
            this.$emit('addPlateCart', {plate: this.plate, plateCounter: this.plateCounter})
        }
    }
}
</script>

<style lang="scss" scoped>
    .image_container {
        
        height: 200px;
        width: 400px;
    
        img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
    }

    .text_container {
        margin-left: 50px;
        h4 {
            font-size: 30px;
        }
        
    }

    .btn-warning {
        height: 70px;
        width: 140px;
        font-size: 25px;
    }

    .fas {
        cursor: pointer;
        font-size: 30px;
        color: #f36d00;
    }

    h3 {
        margin: 0 20px;
        padding: 0;
    }

    .price {
        color: #f36d00;
    }
</style>