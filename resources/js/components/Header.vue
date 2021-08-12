<template>
    <nav class="navbar navbar-expand-lg">
        <router-link :to="{name:'home'}">
            <img src="/img/logo.png" alt="">
        </router-link>
        <!-- <a class="navbar-brand" href="#">
        </a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mx-5" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <router-link class="nav-link" :to="{name:'home'}">Home</router-link>
                    <!-- <a class="nav-link" href="#">Home</a> -->
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" :to="{name:'restaurants'}">Ristoranti</router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" :to="{name: 'about'}">Chi Siamo</router-link>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contatti</a>
                </li>
            </ul>
        </div>
    </nav>
</template>

<script>
export default {
    name: 'Header'
}
</script>

<style lang='scss' scoped>
    nav {
        background-color: #f36d00;

        img {
            width: 200px;
        }

        a.nav-link {
            margin-right: 30px;
            text-transform: uppercase;
            font-size: 20px;
            color: white;

            &:hover {
                background-color: white;
                color: #f36d00;
            }
        }
    }
</style>