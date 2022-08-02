require('./bootstrap');

import {createApp} from 'vue';
import {library} from "@fortawesome/fontawesome-svg-core";
import {fas} from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import LoginForm from "./components/LoginForm";
import FooterView from "./components/FooterView";
import HeaderComponent from "./components/HeaderComponent";
import ProductCard from "./components/ProductCard";
import ProductView from "./components/ProductView";
import router from "./router/router";
import store from "./store/index";
import CartIcon from "./components/CartIcon";
import Checkout from "./components/Checkout";
import CartItem from "./components/CartItem";
import Cart from "./components/Cart";

library.add(fas);
const app = createApp({});
app.component('LoginForm', LoginForm);
app.component('FooterView', FooterView);
app.component('HeaderComponent', HeaderComponent);
app.component('ProductCard', ProductCard);
app.component('ProductView', ProductView);
app.component('Cart', Cart);
app.component('CartItem', CartItem);
app.component('CartIcon', CartIcon);
app.component('Checkout', Checkout);
app.component('fa', FontAwesomeIcon);
app.use(router);
app.use(store);



app.mount('#app');

