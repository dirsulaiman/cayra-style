<template>
    <div>
        <!-- NAVBAR -->
        <section class="bg-gradient-to-r from-red-600 to-yellow-300 " id="navbar">
            <div class="container mx-auto flex flex-wrap p-3 flex-col lg:flex-row items-center">
                <a class="flex font-medium items-center text-gray-900 mb-4 md:mb-0">
                    <!-- <img src="../assets/img/logo.png" alt="" class="w-8" /> -->
                    <span class="ml-3 text-lg text-white">CayraStyle.ID</span>
                </a>
                <nav class="md:mr-auto md:ml-4 pt-3 lg:pt-0 md:py-1 lg:pl-4 border-t lg:border-t-0 lg:border-l border-gray-200 flex flex-wrap items-center justify-center text-sm" >
                    <div class="bg-white bg-opacity-10 m-1 hover:bg-opacity-0 rounded-full">
                        <a class="m-auto p-5 body-font text-gray-200 hover:text-white " href="https://goo.gl/maps/johz8zySZ1PfSwZv9">
                            <i class="fas fa-map-marker-alt"></i>
                            Lokasi Toko
                        </a>
                    </div>
                    <div class="bg-white bg-opacity-10 m-1 hover:bg-opacity-0 rounded-full">
                        <a class="m-auto p-5 body-font text-gray-200 hover:text-white " href="https:/shp.ee/rc23fxy">
                            <i class="fas fa-shopping-bag"></i>
                            Shopee
                        </a>
                    </div>
                    <div class="bg-white bg-opacity-10 m-1 hover:bg-opacity-0 rounded-full">
                        <a class="m-auto p-5 body-font text-gray-200 hover:text-white " href="">
                            <i class="fas fa-store"></i>
                            Tokopedia
                        </a>
                    </div>
                    <div class="bg-white bg-opacity-10 m-1 hover:bg-opacity-0 rounded-full">
                        <a class="m-auto p-5 body-font text-gray-200 hover:text-white " href="">
                            <i class="fab fa-facebook-square"></i>
                            Facebook
                        </a>
                    </div>
                    <div class="bg-white bg-opacity-10 m-1 hover:bg-opacity-0 rounded-full">
                        <a class="m-auto p-5 body-font text-gray-200 hover:text-white " href="">
                            <i class="fab fa-instagram"></i>
                            Instagram
                        </a>
                    </div>
                    <div class="bg-white bg-opacity-10 m-1 hover:bg-opacity-0 rounded-full">
                        <a class="m-auto p-5 body-font text-gray-200 hover:text-white " href="https://wa.me/6282331313117">
                            <i class="fab fa-whatsapp"></i>
                            WhatsApp
                        </a>
                    </div>

                </nav>
            </div>
        </section>

        <!-- TITLE -->
        <section class="flex bg-gradient-to-r from-red-600 to-yellow-300" id="title">
            <p class="text-4xl lg:text-6xl md:text-6xl  text-white text-center font-extrabold m-auto pt-6 pb-12">
                CayraStyle.ID
            </p>
        </section>

        <!-- DESCRIPTION -->
        <section class="" id="description">
            <div class=" m-auto p-12 md:p-8 text-center space-y-4">
                <blockquote class="">
                    <p class="text-lg font-semibold">
                        “Tailwind CSS is the only framework that I've seen scale on
                        large teams. It’s easy to customize, adapts to any design,
                        and the build size is tiny.”
                    </p>
                </blockquote>
                <figcaption class="font-medium">
                    <div class="text-cyan-600">Sarah Dayan</div>
                    <div class="text-gray-500">Staff Engineer, Algolia</div>
                </figcaption>
            </div>
        </section>

        <!-- OUR PRODUCTS -->
        <section class="lg:flex lg:container lg:mx-auto pb-4" id="products">
            <div class="justify-center md:mx-16 lg:mx-0">
                <div class="grid grid-flow-row grid-cols-4 mx-auto lg:grid-cols-2 ">
                    <img src="../../img/dress1.jpeg" alt="" class="h-52 w-52 object-cover">
                    <img src="../../img/dress2.jpeg" alt="" class="h-52 w-52 object-cover">
                    <img src="../../img/dress3.jpeg" alt="" class="h-52 w-52 object-cover">
                    <img src="../../img/dress4.jpeg" alt="" class="h-52 w-52 object-cover">
                </div>
            </div>
            <div class="relative container mx-auto -mt-5 rounded-lg bg-gray-50 shadow-lg lg:mt-z0 lg:-ml-6 lg:my-auto">
                <div class=" m-auto p-12 text-center space-y-4">
                    <blockquote class="">
                        <p class="text-lg font-semibold">
                            “Tailwind CSS is the only framework that I've seen scale on
                            large teams. It’s easy to customize, adapts to any design,
                            and the build size is tiny.”
                        </p>
                    </blockquote>
                    <div class="item-center">
                        <a class="bg-opacity-10 hover:border-black hover:text-black bg-gradient-to-r from-red-600 to-yellow-300 rounded-full font-bold text-sm text-white px-4 "
                            href="#">Lokasi Toko</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- OUR LOCATION -->
        <!-- https://goo.gl/maps/johz8zySZ1PfSwZv9  -->

        <section class="relative flex flex-col" id="location">
            <div class="absolute w-full h-full">
                <span class="absolute w-full h-full bg-gradient-to-t from-green-900 via-transparent to-white "></span>
                <img src="../../img/location.png" alt="location" class="w-full h-full object-cover">
            </div>
            <div class="relative w-full h-full container px-4 pt-8 pb-40">
                <div class=" m-auto">
                    <div class="">
                        <p class="text-2xl font-bold text-white pb-2">
                            Lokasi
                        </p>
                        <p class="text-lg font-semibold text-white">
                            Toko CayraStyle.ID, Jl. Trans Sulawesi, Tarailu ,Kec. Sampaga, Kab. Mamuju, Provinsi
                            Sulawesi Barat, 91564
                        </p>
                    </div>
                    <div class="item-center">
                        <a class="bg-opacity-0 hover:border-black hover:text-black bg-gradient-to-r from-red-600 to-yellow-300 rounded-full font-bold text-sm text-white px-4"
                            href="https://goo.gl/maps/johz8zySZ1PfSwZv9" target=blank>Google Maps</a>
                    </div>
                </div>
            </div>


        </section>




        <!-- SHOPEE -->

        <!-- TOKOPEDIA -->

        <!-- FACEBOOK -->

        <!-- IG -->

        <!-- WA -->

        <div class="relative mt-12 w-full"></div>

        <footer class="relative bg-gradient-to-r from-red-600 to-yellow-300">
            <div class="justify-center ">
                <div class="grid grid-flow-row lg:grid-cols-6 space-y-0 text-center">
                    <div class="">
                        <a
                            class="bg-white bg-opacity-10 px-4 hover:bg-opacity-0 rounded-full body-font text-gray-200 hover:text-white ">
                            <i class="fas fa-map-marker-alt"></i>
                            Lokasi Toko
                        </a>
                    </div>
                    <div class="">
                        <a
                            class="bg-white bg-opacity-10 px-4 hover:bg-opacity-0 rounded-full  body-font text-gray-200 hover:text-white ">
                            <i class="fas fa-shopping-bag"></i>
                            Shopee
                        </a>
                    </div>
                    <div class="">
                        <a
                            class="bg-white bg-opacity-10 px-4 hover:bg-opacity-0 rounded-full  body-font text-gray-200 hover:text-white ">
                            <i class="fas fa-store"></i>
                            Tokopedia
                        </a>
                    </div>
                    <div class="">
                        <a
                            class="bg-white bg-opacity-10 px-4 hover:bg-opacity-0 rounded-full  body-font text-gray-200 hover:text-white ">
                            <i class="fab fa-facebook-square"></i>
                            Facebook
                        </a>
                    </div>
                    <div class="">
                        <a
                            class="bg-white bg-opacity-10 px-4 hover:bg-opacity-0 rounded-full  body-font text-gray-200 hover:text-white ">
                            <i class="fab fa-instagram"></i>
                            Instagram
                        </a>
                    </div>
                    <div class="">
                        <a
                            class="bg-white bg-opacity-10 px-4 hover:bg-opacity-0 rounded-full  body-font text-gray-200 hover:text-white ">
                            <i class="fab fa-whatsapp"></i>
                            WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>


</template>

<style scoped>
    @import 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css';
</style>

<script>
    import axios from "axios";

    export default {
        name: "Home",
        data() {
            return {};
        },
        mounted() {
            const vm = this;
            vm.getData();
        },
        methods: {
            getData() {
                const vm = this;
                const urlPath =
                    "https://api.whatdoestrumpthink.com/api/v1/quotes/random";
                // vm.axios({
                //     method: 'get',
                //     url: urlPath,
                //     headers: {
                //         Accept: 'application/json',
                //         // Authorization: vm.$store.getters.tokenType + ' ' + vm.$store.getters.accessToken
                //     }
                // }).then((response) => {
                //     // console.log(response.data);
                // }).catch(function (error) {
                //     // handle error
                //     // console.log(error);

                // });


                // var quotes = axios
                //     .get("https://api.whatdoestrumpthink.com/api/v1/quotes/random")
                //     .then((response) => (this.info = response.data.bpi));
            },
        },
    };
</script>