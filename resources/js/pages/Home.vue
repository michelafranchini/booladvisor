<template>
    <div>
        <div class="jumbotron">
            <div class="text_jb text-center container-fluid" data-aos="flip-left">
                <h1>Tutti i piatti che vuoi a portata di click</h1>
                <a class="btn btn-start my-5" href="#start">Inizia subito</a>
                
            </div>
        </div>
        <div class="container text-center" id="start">
            <h2>Come fare? Semplice!</h2>
            <div class="choose_restaurant" data-aos="zoom-in-left">
                <div class="d-flex align-items-center justify-content-between">
                    <h3>Scegli il tuo ristorante preferito</h3>
                    <img src="/img/chooserestaurant.svg" alt="" class="restaurant_image">
                </div>
            </div>
            <div class="choose_menu" data-aos="zoom-in-right">
                <div class="d-flex align-items-center justify-content-between">
                    <img src="/img/choosemenu.svg" alt="" class="menu_image">
                    <h3>Scegli i piatti</h3>
                </div>
            </div>
            <div class="lets_eat" data-aos="zoom-in-left">
                <div class="d-flex align-items-center justify-content-between">
                    <h3>Gustali dove vuoi</h3>
                    <img src="/img/eat.svg" alt="" class="eat_image">
                </div>
            </div>
            <div>
                <router-link class="btn btn-warning" :to="{name:'restaurants'}">Inizia subito!</router-link>
            </div>
        </div>
    </div>
</template>

<script>
// import AOS from 'aos';
// import 'aos/dist/aos.css'; 
// AOS.init();

export default {
    name: 'Home',

}
</script>

<style lang="scss" scoped>
    // * {
    //     box-sizing: border-box;
    //     margin: 0;
    //     padding: 0;
    // }
    .jumbotron {
        height: calc(100vh - 80px);
        display: flex;
        align-items: center;
        justify-content: center;
        background-image: url("https://www.projectinvictus.it/wp-content/uploads/2019/12/Cibi-che-fanno-ingrassare.001.jpeg");
        background-repeat: no-repeat;
        background-size: cover;
        

        h1 {
            font-size: 80px;
            color: orangered;
        }

        .text_jb {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 900px;
            height: 400px;
            padding: 30px;
            background-color: rgba($color: #ffffff, $alpha: 0.7);
            

            #start {
                overflow-y: scroll;
                scroll-behavior: smooth;
            }

            .btn-start {
                //height: 30px;
                font-size: 30px;
                background-color: #f36d00;
                color: black;
            }

        }
        
        
    }
    .container {
        margin: auto; 

        h3 {
            font-size: 60px;
        }
        
        .choose_restaurant, 
        .choose_menu, 
        .lets_eat {
            margin: 20px 0;
            padding: 30px;
            border: 2px solid #f36d00;

            .menu_image, 
            .eat_image {
                width: 600px;
            }
        }

        .btn-warning {
            font-size: 30px;
            background-color: #f36d00;
            color: white;
        }

    }
</style>