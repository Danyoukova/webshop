<template>
    <div class="row">
    <router-link to="/">
        <button class="btn-light col-2 m-2 ">
            <fa icon="arrow-left"></fa>
            Back to shop
        </button>
    </router-link>

    </div>
    <div class="container mt-5 pt-3">


        <div class="container single_product_container" v-if="item">

            <div class="row gy-5">
                <div class="col-lg-7">

                    <div class="single_product_pics">
                        <div class="row">
                            <div class="col-lg-9 image_col order-lg-2 order-1">
                                <div class="single_product_image">
                                    <div class="single_product_image_background">
                                        <img :src="'/assets/'+item.image" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="product_details">
                        <div class="product_details_title">
                            <h2>{{ item.product_name }}</h2>
                            <p>Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis.
                                Pellentesque diam dolor, elementum etos lobortis des mollis ut...</p>
                        </div>

                        <div class="m-2">€{{ item.price }}</div>


                        <div class="row ">
                            <div class="col-md-8 order-1 mb-4">
                            <span class="col-3 align-items-center">Quantity:</span>

                                <span class="minus col align-items-center " style="cursor: pointer" @click="decrement(item)">
                                    <fa icon="minus"></fa>
                                </span>

                                <span class="col align-items-center">  {{ item.quantity }}</span>
                                <span class="plus col align-items-center" @click="increment(item)">
                                    <fa icon="plus"></fa>
                                </span>
                            </div>
                            <!--                            <button class="col-4 ml-2">-->
                            <!--                                <add-to-cart-button></add-to-cart-button>-->
                            <!--                            </button>-->


                        <!--                        <button class="btn1 btn-outline-primary px-3">-->
                        <!--                            <add-to-cart-button :product="item"></add-to-cart-button>-->
                        <!--                        </button>-->
                        <div class="col-md-4 order-2 mb-4">
                            <button class="btn-close-white  col align-items-center " :product="item" @click="addToCart"> Add to
                                cart
                            </button>
                            <!-- Modal to show that product is added to your cart -->
                            <modal
                                v-show="isModalVisible"
                                @close="closeModal">
                                <template v-slot:header>

                                </template>
                                <template v-slot:body>
                                    <img :src="'/assets/'+item.image" alt="img">
                                    {{ item.product_name }} is added to your cart!
                                </template>
                                <!--                                <template v-slot:footer>-->

                                <!--                                </template>-->

                            </modal>
                            <!--                            -->
                        </div>



                        </div>
                    </div>
                    <router-link to="/cart">
                        <button class="btn-light col-12 m-2"> <fa icon="shopping-cart"></fa> To shopping cart</button>
                    </router-link>
                </div>

            </div>

        </div>

    </div>
</template>
<script>
import productService from "../Services/productService";
import Cart from "./Cart";
import Modal from "./Modal"
import {mapActions} from "vuex";

export default {
    name: "ProductDetailView",
    components: {Cart, Modal},

    props: {
        product: ['product'],
        id: {
            type: String
        }

    },
    data() {
        return {
            isModalVisible: false,
            categories: [],
            products: [],
            item: null,


        }
    },
    created() {

        productService.getProduct(this.id)
            .then(response => {
                this.item = response.data

            })
    },
    methods: {

        closeModal() {
            this.isModalVisible = false;
        },

        increment(item) {
            this.$store.commit('INCREMENT_PRODUCT_QTY', item)
        },

        decrement(item) {
            this.$store.commit('DECREMENT_PRODUCT_QTY', item)
        },
        addToCart() {
            this.$store.commit('ADD_PRODUCT', this.item)
            this.isModalVisible = true;

        }

    }

}
</script>

<style scoped>

</style>
