<template>
    <div class="container">
        <div class="card w-100">
            <div class="card-body d-flex justify-content-around">
                <div class="image_container">
                    <img :src="'/storage/'+ restaurant.image" :alt="restaurant.name">
                </div>
                <div class="text_container">
                    <h4 class="card-title">{{ restaurant.name }}</h4>
                    <h5>+{{restaurant.phone}}</h5>
                        <div class="button_container">
                            <router-link type="button" class="btn btn-warning" :to="{name: 'restaurant', params: {slug: restaurant.slug}}">Vai alla scheda del ristorante</router-link>
                            <router-link type="button" class="btn btn-info" :to="{name: 'plates', params: {id: restaurant.id}}">Vai al menù</router-link>
                        </div>
                </div>
            </div>
        </div>       
    </div>
</template>

<script>
export default {
    name: 'SingleRestaurant', 
    props: ['restaurant']
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
        .button_container {
            margin-top: 50px;
            .btn {
                margin: 10px;
            }
            .btn-info {
                background-color: #980606;
            }
            .btn-warning {
                background-color: #f36d00;
                color: white;
            }
        }
    }
</style>