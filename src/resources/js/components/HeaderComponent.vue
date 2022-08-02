<template>
    <header class="header trans_300">
    <!-- Main Navigation -->

    <div class="main_nav_container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-right">
                    <div class="logo_container">
                        <a href="/">Hair & <span>Beauty</span></a>
                    </div>
                    <nav class="navbar">
                        <ul class="navbar_menu">
                            <li><a href="#">home</a></li>
                            <li><a href="#">shop</a></li>
                            <li><a href="#">promotion</a></li>
                            <li><a href="#">pages</a></li>

                            <li><a href="contact.html">contact</a></li>
                        </ul>
                        <ul class="navbar_user">
                            <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                            <li class="checkout">

                                <router-link to="/cart">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span id="checkout_items" class="checkout_items">{{ cartQuantity }} </span>
                                </router-link>
                            </li>
                        </ul>
                        <div class="hamburger_container">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </div>

                        <nav class="ml-5">
                            <router-link to="/login"> <span>Login</span> </router-link>
                            <router-link to="/register"><span class="ml-2">Register</span></router-link>
                        </nav>
                    </nav>


                </div>
            </div>
        </div>
    </div>

    </header>
</template>

<script>
export default {
    name: "HeaderComponent",
    computed: {
        cartQuantity() {
            return this.$store.state.cart.reduce((acc, item) => acc + item.quantity, 0);
        },
    }
}
</script>

<style scoped>

</style>
