<template>
    <div>
        <div class="jumbotron">
            <div class="text_jb">
                <h1 class="animate__animated animate__backInDown">Tutti i piatti che vuoi <br> a portata di click</h1>
                <a class="btn btn-warning" href="#start" >Inizia Subito</a>
                
            </div>
        </div>
        <div class="container text-center" id="start">
            <h2>Come fare? Semplice!</h2>
            <div class="choose_restaurant animate__animated animate__backInLeft animate__delay-3s">
                <div class="d-flex align-items-center justify-content-between">
                    <h3>Scegli il tuo ristorante preferito</h3>
                    <img src="/img/chooserestaurant.svg" alt="" class="restaurant_image">
                </div>
            </div>
            <div class="choose_menu animate__animated animate__backInRight animate__delay-4s">
                <div class="d-flex align-items-center justify-content-between">
                    <img src="/img/choosemenu.svg" alt="" class="menu_image">
                    <h3>Scegli i piatti</h3>
                </div>
            </div>
            <div class="lets_eat animate__animated animate__backInLeft animate__delay-5s">
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
        background-image: url("https://www.projectinvictus.it/wp-content/uploads/2019/12/Cibi-che-fanno-ingrassare.001.jpeg");
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;

        h1 {
            font-size: 80px;
            color: white;
        }

        .text_jb {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            
            // img {
            //     width: 100px;
            //     // height: 60px;
            // }

            #start {
                overflow-y: scroll;
                scroll-behavior: smooth;
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