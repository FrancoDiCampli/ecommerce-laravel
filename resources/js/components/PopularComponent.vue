<template>
    <div class="container">
        <div class="site-section" id="products-section">
            <div class="container">
                <div class="row mb-5 justify-content-center">
                    <div class="col-md-6 text-center">
                        <h3 class="section-sub-title">Popular Products</h3>
                        <h2 class="section-title mb-3">Our Products</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.</p>
                    </div>
                </div>


                <div class="row">

                    <div class="col-lg-4 col-md-6 mb-5" v-for="product in products" :key="product.id">
                        <div class="product-item">
                        <figure>
                            <img :src="product.image" alt="Image" class="img-fluid" style="width:120px">
                        </figure>
                        <div class="px-4">
                            <h3><a href="#">{{product.name}}</a></h3>
                            <div class="mb-3">
                            <span class="meta-icons mr-3"><a href="#" class="mr-2"><span class="icon-star text-warning"></span></a> 5.0</span>
                            <span class="meta-icons wishlist"><a href="#" class="mr-2"><span class="icon-heart"></span></a> 29</span>
                            </div>
                            <p class="mb-4">{{product.details}}</p>
                            <div>
                            <a href="#" class="btn btn-black mr-1 rounded-0">Cart</a>
                            <a href="#" class="btn btn-black btn-outline-black ml-1 rounded-0">View</a>
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
    import axios from 'axios'
    export default {
        data(){
            return{
                products:[]
            }
        },

        mounted() {
            this.getProducts()
        },
        methods:{
            getProducts: async function(){
                let res = await axios.get('products')
                this.products = await res.data
            }
        }
    }
</script>
