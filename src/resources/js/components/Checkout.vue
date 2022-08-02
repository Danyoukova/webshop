<template>
    <div>


        <div class="container">

            <div class="row">
                <div class="col-md-4 order-md-2 mt-4 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Your cart</span>
                        <span class="badge badge-secondary badge-pill">{{ cartQuantity }}</span>
                    </h4>


                    <ul class="list-group mb-1">
                        <li v-for="product in getProductsInCart" :key="product"
                            class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">{{ product.product_name }}</h6>
                                <!--                                <small class="text-muted">Brief description</small>-->

                                <!--                                <div v-for="product in getProductsInCart" :key="product" class=" ">-->
                                <!--&lt;!&ndash;                                    <cart-item :product="product"></cart-item>&ndash;&gt;-->

                                <!--                                </div>-->
                            </div>
                            <span class="text-muted">{{ product.price }}</span>
                            <span class="text-muted">{{ product.quantity }}</span>
                            <span class="text-muted">{{ cartLineTotal(product) }}</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (EUR)</span>
                            <strong id="cartTotal">{{ cartTotal }}</strong>
                        </li>
                    </ul>

                </div>


<!--                &lt;!&ndash;     test view           &ndash;&gt;-->

                <div class=" col-md-8 order-md-1 mb-4 mt-5">
                    <form class="needs-validation" novalidate="">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="first_name">First name</label>
                                <input  class="form-control"
                                       type="text"
                                       id="first_name"
                                       name="first_name"
                                       v-model="customer.first_name"
                                       :disabled="paymentProcessing">
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="last_name">Last name</label>
                                <input type="text" class="form-control" id="last_name"
                                       name="last_name"
                                       v-model="customer.last_name"
                                       :disabled="processPayment">
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                        </div>



                        <div class="mb-3">
                            <label for="email">Email </label>
                            <input type="email" class="form-control"
                                   id="email"
                                   placeholder="you@example.com"
                                   name="email"
                                   :value="customer.email"
                                   :disabled="paymentProcessing">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="street">Street</label>
                                 <input  class="form-control"
                                    type="text"
                                    id="street"
                                    name="street"
                                    v-model="customer.street"
                                    :disabled="paymentProcessing">
                                <div class="invalid-feedback">
                                    Please enter your address.
                                </div>
                             </div>


                        <div class="col-md-6 mb-3">
                            <label for="street_number">Street number </label>
                            <input  type="text"
                                    class="form-control"
                                    id="street_number"
                                    name="street_number"
                                    v-model="customer.street_number"
                                    :disabled="paymentProcessing">
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="country">Country</label>
                                <input type="text"
                                       class="form-control"
                                       id="country"
                                       name="country"
                                       v-model="customer.state"
                                       :disabled="paymentProcessing"

                                >

                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="city">City</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="city"
                                    name="city"
                                    v-model="customer.city"
                                    :disabled="paymentProcessing"
                                >
                                <div class="invalid-feedback">
                                    Please provide a valid state.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="zip_code">Zip</label>
                                <input type="text"
                                       class="form-control"
                                       id="zip_code"
                                       name="zip_code"
                                       v-model="customer.zip_code"
                                       :disabled="paymentProcessing">
                                <div class="invalid-feedback">
                                    Zip code required.
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="same-address">
                            <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                        </div>

                        <hr class="mb-4">

                        <h4 class="mb-3">Payment</h4>
                        <div class="row">
                            <div class="col p-2 ">
                                <div class="">
                                    <label for="card-element" class=" text-sm text-gray-600">Credit Card Info</label>
                                    <div id="card-element"></div>
                                </div>
                            </div>
                        </div>

                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block"
                                type="submit"
                                @click="processPayment"
                                :disabled="paymentProcessing"
                                v-text="paymentProcessing ? 'Processing' : 'Pay Now'"
                        ></button>
                    </form>






        </div>
    </div>
        </div>
    </div>
</template>
<!--<script src="Http://js.stripe.com/v3/"></script>-->
<script>
import {mapGetters} from 'vuex';
import {loadStripe} from '@stripe/stripe-js';
import {StripeCheckout} from '@vue-stripe/vue-stripe';
import productService from "../Services/productService";

export default {
    name: "Checkout",

    props: ['product', 'user']

    ,
    components: {
        StripeCheckout, loadStripe
    },
    data() {
        return {
            addresses: {},
            userAddress:'',

            customer: {
                first_name: '',
                last_name: '',
                email: '',
                street: '',
                street_number: '',
                city: '',
                state: '',
                zip_code: ''
            },


            paymentProcessing: false,
            stripe: {},
            card: '',
            publishableKey: 'pk_test_51KxTSxDGN6wj7mnxAmzrDDXX9oyVvfYeae6tKyxrUYUihbHyTW2BBUetYlaflEAJLfv42EWamGLP2yHgSjahl2X000EM1L06q5'
        }
    },
    created() {
        this.getLoggedInUser()
    },
    async mounted() {


        /* load stripe element from stripe.js using publishable api key */
        this.stripe = await loadStripe(this.publishableKey);
        const elements = this.stripe.elements();
        this.cardElement = elements.create('card', {
            hidePostalCode: true,
            classes: {
                base: 'bg-gray-100 rounded border border-gray-300  text-base outline-none text-gray-700 p-3 leading-8 transition-colors duration-200 ease-in-out'
            }
        });
        this.cardElement.mount('#card-element');

    },

    methods: {
        getAddresses() {
            axios.get('/api/addresses')
                .then(resp => {
                    this.addresses = resp.data
                    let findAddress = this.addresses.find(address =>
                        [
                            address.country = this.customer.state,
                            address.city = this.customer.city,
                            address.street = this.customer.street,
                            address.street_number = this.customer.street_number,
                            address.postal_code = this.customer.zip_code
                        ]
                    )
                    console.log(findAddress)
                })
        },
        getLoggedInUser() {
            let user = this.$store.getters.getUser
            if (user) {
                this.customer.last_name = user.name
                this.customer.first_name = user.name
                this.customer.email = user.email

                //console.log(user.billing_address_id)
                if (user.billing_address_id !== null) {
                    axios.get('/api/addresses/' + user.billing_address_id)
                        .then(response => {
                            console.log(response.data)
                            this.userAddress = response.data
                            console.log(this.userAddress)
                             this.customer.state = this.userAddress.country
                            // this.customer.city = response.data.city

                        })
                }

                axios.get('/sanctum/csrf-cookie').then(resp => {
                    axios.get('/api/userID/' + user.id)
                        .then(response => {
                            let thisUser = response.data

                            //console.log(response)
                            // console.log(response.data[3].billing_address_id)


                        })
                })

            }
        },

        cartLineTotal(item) {
            // return console.log(item);
            let amount = item.price * item.quantity;
            return amount.toLocaleString('EUR', {style: 'currency', currency: 'EUR'})
        },

        totalPrice(price) {
            return this.product.quantity * price
        },

        async processPayment() {
            this.paymentProcessing = true;
            const {paymentMethod, error} = await this.stripe.createPaymentMethod(
                'card', this.cardElement, {
                    billing_details: {
                        name: this.customer.first_name + ' ' + this.customer.last_name,
                        email: this.customer.email,
                        address: {
                            line1: this.customer.street + ' ' + this.customer.street_number,
                            city: this.customer.city,
                            state: this.customer.state,
                            postal_code: this.customer.zip_code
                        }
                    }
                }
            );
            if (error) {
                this.paymentProcessing = false;
                console.error(error);
            } else {
                //console.log(paymentMethod);
                this.customer.payment_method_id = paymentMethod.id;
                let amount = this.$store.state.cart.reduce((acc, item) => acc + (item.price * item.quantity), 0);
                this.customer.amount = amount * 100;
                this.customer.cart = JSON.stringify(this.$store.state.cart);
                // this.customer.order = JSON.stringify(this.$store.state.cart);
                axios.post('/api/purchase', this.customer)
                    .then((response) => {
                        this.paymentProcessing = false;
                        // console.log(response);
                        this.$store.commit('UPDATE_ORDER', this.$store.state.cart);
                        this.$store.dispatch('clearCart');
                        localStorage.clear()
                        //console.log('clear')

                        this.$router.push('/summary');
                    })
                    .catch((error) => {
                        this.paymentProcessing = false;
                        console.error(error);
                    });
            }
        },

        //},
        // submitPayment() {
        //     this.stripe.confirmCardSetup(
        //         this.intentToken.client_secret, {
        //             payment_method: {
        //                 card: cardElement,
        //                 billing_details: {name: this.customer.last_name}
        //             }
        //         })
        // }


    },
    computed: {

        ...
            mapGetters([
                'getProductsInCart',
            ]),
        cart() {

            return this.$store.state.cart;
        }
        ,
        cartQuantity() {
            let amount =  this.$store.state.cart.reduce((acc, item) => acc + item.quantity, 0);
            //this.$store.commit('UPDATE_CART')
            return amount;
        }
        ,
        cartTotal() {
            let amount = this.$store.state.cart.reduce((acc, item) => acc + (item.price * item.quantity), 0);
            return amount.toLocaleString('EUR', {style: 'currency', currency: 'EUR'});
        }
        ,


    }
}
</script>

<style scoped>

</style>
