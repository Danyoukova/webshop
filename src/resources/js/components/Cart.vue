<template>
    <!--            <div v-if="!hasProduct()" class="checkout-message">-->
    <!--                <h3>No products in cart...</h3>-->
    <!--            </div>-->
    <div class="row p-2 m-3">
        <div class="col-md-9 order-md-1">
            <div class="row m-1 ">
                <div class="col-8  mt-5">

                    <div v-for="product in getProductsInCart" :key="product" class="checkout-product ">
                        <cart-item :product="product"></cart-item>

                    </div>

                </div>
                <!--        <div v-if="!hasProduct" class="checkout-message">-->
                <!--            <h3>No products...</h3>-->
                <!--            &lt;!&ndash;            <router-link to="./">Back to list of products</router-link>&ndash;&gt;-->
                <!--        </div>-->
                <!--                <h3 class="total" v-if="hasProduct">-->
                <!--                    Total: {{ totalPrice }}-->
                <!--                </h3>-->
            </div>
        </div>
        <!--    <div class="row">-->
        <!--        <div class="col-8 ">-->
        <!--            <div class="col-6 m-3 ">-->
        <!--                <div class="row p-2 d-flex justify-content-end">-->
        <!--                    <span class="col">Total </span>-->
        <!--                    <span class="total_cart col"> {{ cartTotal }} </span>-->

        <!--                </div>-->
        <!--                <div class="row p-2">-->
        <!--                    <span class="BTW_on_total col"> VAT 21%  </span>-->
        <!--                    <span class="total col"> {{ vatAmount }} </span>-->

        <!--                </div>-->
        <!--                <div class="row p-2">-->
        <!--                    <span class="Total_with_BTW col"> Total  </span>-->
        <!--                    <span class="total col"> {{ totalWithVat }} </span>-->

        <!--                </div>-->
        <!--            </div>-->

        <!--            <router-link :to="{name:'checkout', params: {user: user}}">-->

        <!--                <button class="btn-danger col-12 m-2" v-if="getLoggedInUser !== null"  >Checkout</button>-->
        <!--            </router-link>-->
        <!--        </div>-->
        <!--    </div>-->

        <div class="col-md-3 order-md-2 mb-4 mt-5">
            <h4 class="d-flex justify-content-between align-items-center mb-3 mt-5 mr-3">
                <span class="text-muted">Your cart</span>
                <span class="badge badge-secondary badge-pill">{{ cartQuantity }}</span>
            </h4>


            <ul class="list-group mb-1">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Total products in cart</h6>

                    </div>
                    <span class="text-muted"></span>

                </li>

                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (EUR)</span>
                    <strong id="cartTotal">{{ cartTotal }}</strong>
                </li>

                <li class="list-group-item d-flex justify-content-between">
                    <span>VAT (EUR)</span>
                    <strong>{{ vatAmount }}</strong>
                </li>

                <li class="list-group-item d-flex justify-content-between">
                    <span>Total cart (EUR)</span>
                    <strong>{{ totalWithVat }}</strong>
                </li>
            </ul>
            <router-link :to="{name:'checkout', params: {user: user}}">

                <button class="btn-danger col-12 " v-if="getLoggedInUser !== null">Checkout</button>
            </router-link>
        </div>

        <!--    _____________________-->
    </div>

</template>


<script>
import {mapGetters} from 'vuex';
import Checkout from './Checkout'

export default {
    name: "Cart.vue",
    components: {Checkout},

    props: ['product', 'user'],


    computed: {

        ...mapGetters([
            'getProductsInCart'

        ]),
        vatAmount() {
            let total = this.$store.getters.cartTotal
            return (total * 21 / 100).toFixed(2)
        },
        totalWithVat() {
            let total = parseFloat(this.$store.getters.cartTotal)
            let vat = parseFloat(this.vatAmount)
            return (vat + total).toFixed(2)

        },
        cartTotal() {
            let amount = this.$store.state.cart.reduce((acc, item) => acc + (item.price * item.quantity), 0);

            return amount.toLocaleString('EUR', {style: 'currency', currency: 'EUR'});
        },
        getLoggedInUser() {
            let user = this.$store.getters.getUser
            // console.log(user)
            return user

        },
        cartQuantity() {
            let amount = this.$store.state.cart.reduce((acc, item) => acc + item.quantity, 0);
            //this.$store.commit('UPDATE_CART')
            return amount;
        }


    },
    methods: {},
    created() {

    }


}
</script>

<style scoped>

</style>
