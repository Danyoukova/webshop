<template>
    <div class="cardProduct">
        <div class="inner-cardProduct">
            <router-link :to="{name: 'details', params: {id: product.id}}">

                <div>
                    <img :src="'/assets/'+ product.image" alt="img"
                         class="img-fluid rounded ">
                </div>
            </router-link>
            <router-view></router-view>
            <div class=" mt-3 px-2">

                <h4>{{ product.product_name }} </h4>

            </div>
            <div class="px-2">
                <h5>€{{ product.price }}</h5>
            </div>
            <div class="px-2">
                <h5>{{ product.category_name }}</h5>
            </div>
            <div class="px-2">
                <h5>{{ product.subcategory_name }}</h5>
            </div>


            <div class="px-2 mt-3">
                <!--      <button class="btn1 btn-primary px-3">Buy Now</button>-->
                <!--                    <button class="btn1 btn-outline-primary px-3">-->
                <!--                        <add-to-cart-button :product="product"  ></add-to-cart-button>-->
                <!--                    </button>-->
                <button class="btn-danger" :product="product" @click="addToCart"> Add to cart</button>

            </div>

        </div>
        <!-- Modal to show that product is added to your cart -->
        <modal v-show="isModalVisible"
               @click="closeModal">
            <template v-slot:header>

            </template>
            <template v-slot:body>
                <img :src="'/assets/'+product.image"   alt="img">
                {{ product.product_name }} is added to your cart!
            </template>
        </modal>
</div>

</template>

<script>
import Modal from "./Modal"

export default {
name: "ProductCard.vue",
components: {Modal},

props: ['product', 'category', 'subcategory'],
data() {
return {
    isModalVisible: false,
    cart: []
}
}
,
methods: {
// ...mapActions([]),
closeModal() {
    this.isModalVisible = false;
},
addToCart() {
    this.$store.commit('ADD_PRODUCT', this.product)
    this.isModalVisible = true;
}
}
}
</script>

<style scoped>

</style>
