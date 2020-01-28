<template>



	<div class="cart-page">
		<loading :active.sync="isLoading" 
        :can-cancel="true" 
        :on-cancel="onCancel"
        <!-- :is-full-page="fullPage"></loading> -->


    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="table-responsive-lg">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="table-active text-center">
                                <th scope="col">Item Description</th>
                                <th scope="col">Your Customizations</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                            </tr>
                        </thead>
                        <tbody >

                            <tr v-for="product in cartdata">
                                <th>
                                    <div class="cart-product">
                                        <span><i class="fa fa-times"></i></span>
                                        <a href="#">{{product.product_name}}</a>
                                        <img :href="'/storage/'+product.image" alt="cart item">
                                    </div>
                                </th>
                                <td>
                                    <ul>
                                        <li>View Customizations</li>
                                    </ul>
                                </td>
                                <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    
                                    <button @click="product.quantity -= 1" v-if="product.quantity > 1" class="cart_quantity_down" href=""> - </button>
                                    <input class="cart_quantity_input" type="text"  :value="product.quantity" @change="selectChange(product.quantity)" autocomplete="off" size="3">
                                   
                                    <button @click="product.quantity += 1" class="cart_quantity_up" href=""> + </button>
                                  
                              
                                </div>
                                

                                </td>
                                <td> ${{totalprice = product.price * product.quantity}}</td>
                               <input type="hidden" name="" value="totalprice += totalprice">
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart-price-section">
                    <ul class="pricing-tag">
                        <li>
                            <label for="Subtotal">Subtotal:</label> <span>${{total}}</span>
                        </li>
                        <li>
                            <label for="Shipping">Shipping:</label> <span></span>
                        </li>
                        <li>
                            <label v-show="this.coupon_data['amount'] != null" for="Shipping">Coupon Amount:</label> <span>{{this.coupon_data['amount']}}</span>
                        </li>
                        <li>
                        	<label v-if="this.coupon_data['amount'] != null"  for="Total">Total:   ${{total - this.coupon_data['amount']}}</label> 
                        	<label for="Total">Total:   </label><span>${{total}}</span>
                            
                        </li>
                    </ul>
                    <!-- <div class="promo-code">
                        <p>Have a Promo Code?</p>
                        <input type="text"><a href="/cart/apply-coupon">Apply Coupon</a>
                    </div> -->
                    <form @submit="formSubmit">
                        <label>Coupon Code</label>
                        <input size="12" type="text" v-model="coupon_code">
                        <input type="submit" value="Apply" class="btn btn-default">
                    </form>

                </div>
                <div class="check-now">
                <p>Hey there! We’re all set to make your outfit flawless-fit approved.</p>
                <a href="/checkout" class="checkuotbtn">Checkout now</a> or
                <a href="measurements.php" class="mbtn">Update Mesurement</a>
                </div>
            </div>
        </div>
    </div>

</div>
</template>
<script>

		// Import component
    import Loading from 'vue-loading-overlay';
    // Import stylesheet
    import 'vue-loading-overlay/dist/vue-loading.css';

	export default {

		components: {
	        Loading
	    },
		
		name: 'cart',
		props: ['menu'],
		data() {
		    return {
		       cartdata: '',
		       isLoading: false,
                fullPage: true,
                totalprice: 0,
                coupon_data: '',
                coupon_code: ''	    }
		},
		mounted () {
			//let proquantity = $('.cart_quantity_input').val()
			this.onCancel();
			
	    },
	    created(){
	    	
	    	const uri = `/cart`;
		    this.$http.get(uri).then((response) => {
		    	//console.log(response.data);
		        this.cartdata = response.data;
		    });

		    
		},
		computed: {
	    	total: function(){

			  let total = [];

			  Object.entries(this.cartdata).forEach(([key, val]) => {
			      total.push(val.price * val.quantity) // the value of the current key.
			  });

			  return total.reduce(function(total, num){ return total + num }, 0);

			},

	    },
		methods: {
			onCancel(){
				this.isLoading = true;
                // simulate AJAX
	            setTimeout(() => {
	              this.isLoading = false
	            },1000)
			},
			formSubmit(e) {
                e.preventDefault();
                let currentObj = this;
                this.$http.post('/cart/apply-coupon', {
                    coupon_code: this.coupon_code,
                })
                .then(function (response) {
                    currentObj.coupon_data = response.data;
                    //console.log(response.data);
                    
					if (response.data['err'] == null) {
						Vue.$toast.success('Successfully Applied Coupon', {
						  // optional options Object
						})
					}else{
						Vue.$toast.error(response.data['err'], {
					  
						})
					}
					
                   	
                })
                // .catch(function (error) {
                //     currentObj.errmsg = error;
                // });
            }
	    	
		}
	    
	}
</script>
<style>
	.cart_quantity_up{
		font-size: 20px;
		color: black;
	}
	.cart_quantity_down{
		font-size: 20px;
		color: black;
	}
</style>