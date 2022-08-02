<template>
    <div class="container mt-5 pt-1 ">
        <div class="row">

            <div class="col"> </div>
            <div class="col-3"></div>
            <span class="col"></span>
            <small class="col align-items-start text-muted">Quantity</small>
            <span class="col"></span>
            <span class="col"></span>
            <small class="col text-muted">Price/item</small>
            <small class="col text-muted">Total price</small>
        </div>
        <div class="row">
            <img class="product-image col" :src="'/assets/'+product.image" alt=""  >
            <h5 class="product-name col-3 d-flex align-items-center ">{{ product.product_name }}</h5>


            <span class="col d-flex align-items-center" @click="decrement(product)" style="cursor: pointer"><fa icon="minus"></fa></span>
            <span class="col d-flex align-items-center ">  {{ product.quantity }}  </span>
            <span class="col d-flex align-items-center" @click="increment(product)" style="cursor: pointer"><fa icon="plus"></fa></span>
            <span class=" col d-flex align-items-center" @click="removeItemFromCart(product)" style="cursor: pointer"><fa icon="trash"></fa></span>

            <span class="product-price col d-flex align-items-center "> €{{ product.price }} </span>
            <span class="product-price col d-flex align-items-center "> €{{totalPrice(product.price)}} </span>
        </div>


    </div>

</template>

<script>
import {mapActions, mapGetters} from "vuex";
import Modal from "./Modal";

export default {
    name: "CartItem",
    components: {Modal},
    props: ['product'],

    data() {
        return {}
    },
    computed: {

        ...mapGetters([
            'getProductsInCart',


        ]),


    },
    methods: {
        ...mapActions([
            'removeProduct',
            'updateCart'

        ]),


        increment(item) {
            this.$store.commit('INCREMENT_PRODUCT_QTY', item)
        },

        decrement(item) {
            this.$store.commit('DECREMENT_PRODUCT_QTY', item)
        },

        remove(index) {
            this.removeProduct(index);
        }
        ,
        removeItemFromCart(item) {
            this.$store.commit('REMOVE_PRODUCT', item)
        },

        totalPrice(price) {

            return this.product.quantity * price

        }
        ,
        // hasProduct() {
        //     return this.getProductsInCart;
        // }
    }
}
</script>

<style scoped>

</style>
