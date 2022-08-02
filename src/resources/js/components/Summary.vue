<template>
    <div class="w-full">


            <h5 class="mb-4">Thank you for your purchase</h5>
            <router-link to="/">
                <button class="btn-light col-2 m-2 ">
                    <fa icon="arrow-left"></fa>
                    Back to shop
                </button>
            </router-link>
            <table class="table-auto w-full text-left whitespace-no-wrap">
            </table>
        </div>

</template>
<script>
export default {
    methods: {
        cartLineTotal(item) {
            let amount = item.price * item.quantity;
            return amount.toLocaleString('eu', { style: 'currency', currency: 'EUR' });
        }
    },
    computed: {
        order() {
            console.log(this.$store.state.order)
            return this.$store.state.order;
        },
        orderQuantity() {
            return this.$store.state.order.products.reduce((acc, item) => acc + item.quantity, 0);
        },
        orderTotal() {
            let amount = this.$store.state.order.products.reduce((acc, item) => acc + (item.price * item.quantity), 0);
            return amount.toLocaleString('eu', { style: 'currency', currency: 'EUR' });
        }
    }
}
</script>
