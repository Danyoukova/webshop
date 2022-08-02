<template>

    <div class="row">
        <div class="container product_section_container">


            <div class="row">
                <!--           <categories></categories>-->

                <div class="banner">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-4"
                                 v-for="category in categories"
                                 :key="category"
                                 @click="selectCategory(category.id)">

                                <div class="banner_category">
                                    <span>{{ category.category_name }}</span>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>

                <div class="col-sm-2 mt-5">
                    <!--              <prod-cat-subcat/>-->
                    <div class="sidebar">
                        <div class="sidebar_section">
                            <div class="sidebar_title">
                                <!--     <h5>Subcategories</h5>-->
                            </div>
                            <ul class="sidebar_categories"
                                v-for="subcat in filteredSubcategories"
                                :key="subcat"
                                @click="selectSubcategory(subcat.subcategory_id)"
                           >
                                <li  > <span > {{ subcat.subcategory_name }}</span></li>
<!--@click="active = !active "-->

                            </ul>
                        </div>


                    </div>
                </div>

                <div class=" col product_section clearfix">


                    <!--     Productcard grid -->
                    <div class="main_content">
                        <div class="container">
                            <div class="row">

                                <div class="col mt-5 mb-2"
                                     v-if="filteredProducts"
                                     v-for="product in filteredProducts"
                                     :key="product">
                                    <!--        <router-link :to="{name: 'ProductDetailView', params: {id: product.id}}">-->
                                    <product-card :product="product"></product-card>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
import productService from "../Services/productService";


export default {
    name: "ProductView",
    components: {},

    //  components: {Categories},

    props:

        {

            id: {
                type: String
            },
            product: {
                type: Object
            }


        },
    data() {
        return {
            active: false,
            categories: [],
            subcategories: [],
            products: [],
            selectedCategory: null,
            selectedSubcategory: null


        }
    },
    created() {
        this.$store.commit("updateCartFromLocalStorage");
        productService.getProducts()
            .then(response => {

                this.products = response.data
                // console.log(this.products)
            })
            .catch(error => {
                console.log(error)
            })
        productService.getCategories()
            .then(response => {
                this.categories = response.data.data;

            })
        productService.getSubcategories()
            .then(response => {
                this.subcategories = response.data

            })


    },
    methods: {
        selectCategory(id) {
            this.selectedCategory = id;
            this.selectedSubcategory = null;
        },
        selectSubcategory(id) {
            console.log('selected id: ' + id)
            this.selectedSubcategory = id;
            this.active = true;
        },


    },
    computed: {
        filteredSubcategories() {

            if (this.selectedCategory === null) {
                return []
            }
            return this.subcategories.filter((item) => item.category_id === this.selectedCategory);
        },
        filteredProducts() {

            if (this.selectedCategory && this.selectedSubcategory === null) {
                return this.products.filter((item) => item.category_id === this.selectedCategory);

            } else if (this.selectedCategory) {
                return this.products.filter((item) => item.subcategory_id === this.selectedSubcategory);

            } else {
                return this.products
            }

        }

    }


// //,
// <!--    methods: {-->
// <!--        addToCart(index) {-->
//
// <!--            console.log(index)-->
//
// <!--        }-->
// <!--    }-->


}
</script>

<style scoped>

</style>
