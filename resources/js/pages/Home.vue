<template>
    <div>
        <div class="jumbotron">
            <div class="container">
                <h1>Tutti i piatti che vuoi <br> a portata di click</h1>
                <img src="/img/platesvg.svg" alt="">
            </div>
        </div>
        <div class="container text-center">
            <h2>Scegli il ristorante</h2>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Home'

}
</script>

<style lang='scss' scoped>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }
    .jumbotron {
        height: 600px;
        background-image: url("https://www.projectinvictus.it/wp-content/uploads/2019/12/Cibi-che-fanno-ingrassare.001.jpeg");
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;

        h1 {
            font-size: 80px;
            color: white;
        }

        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            
            img {
                width: 100px;
                // height: 60px;
            }

        }
    }
</style>