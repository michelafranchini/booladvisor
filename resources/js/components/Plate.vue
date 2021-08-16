<template>
    <div class="container">
        <div class="card w-100">
            <div class="card-body d-flex justify-content-between align-items-center" >
                <div class="image_container">
                    <img :src="'/storage/'+ plate.image" :alt="plate.name">
                </div>
                <div class="text_container">
                    <h4 class="card-title">{{ plate.name }}</h4>
                    <h5>{{plate.price}}€</h5>
                    <p>{{plate.ingredients}}</p>
                </div>
                <div>
                    <button class="btn btn-warning">Ordina</button>
                </div>
            </div>
        </div>       
    </div>
</template>

<script>
export default {
    name: "Plate", 
    props: ['plate']
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
</style>