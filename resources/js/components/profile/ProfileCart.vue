<template>
	<div >
	    <div class="alert alert-danger" role="alert">
	        A simple danger alert—check it out!
	    </div>
	    <div class="deshheding">

	        <h1>Card Pending</h1>
	    </div>
	    {{this.cart.query}}
	    <div  class="card">
	    	<div v-for="data in this.cart">
		        <h5 class="card-header light">
		            <span>Date: {{data.data[0].date}}</span><span> | Total: {{data.data[0].views}}</span>
		        </h5>
		        <div class="card-body">
		            <div class="container">
		                <div class="row">
		                    <div class="col-lg-9">
		                        <div class="row">
		                            <div v-if="index != 'data'" v-for="(product,index) in data" class="col-lg-4">

		                                <a href="#" class="card cardproduct">
		                                    
		                                    <div class="card-body">
		                                        <p class="card-text">{{data[index].product_name}}</p>
		                                        <p class="card-text">$ {{data[index].price}}</p>
		                                    </div>
		                                </a>
		                            </div>
		                               
		                        </div>
		                    </div>
	                    
		                    <div   class="col-lg-3">

		                        <div class="dsubtotal">
		                            <ul>
		                                <li><strong>Card Total:</strong></li>
		                                <li><strong>Shipping:</strong> Free</li>
		                                <li><strong>Total:</strong> 120$</li>
		                            </ul>
		                        </div>
		                    </div>
		                </div>
	                </div>
	            </div>
	        </div>
	        <div class="card-footer text-rignt">
	            <ul class="nav justify-content-end">
	                <li class="nav-item">
	                    <a class="nav-link active" href="#">Delete</a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-link" href="#">Modify</a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-link nslightbtn" href="#">Finish Order</a>
	                </li>
	            </ul>

	        </div>
	    </div>
	</div>
</template>



<script>

    export default {
        name: "ProfileCart",
        components: {

	    },

	    data(){
	    	return{
	    		cart: "",
	    	}

	    },

	    computed:{
	    	
	    },

        mounted(){
        	this.getusercart();
        	
        },
	    methods:{
	    	getusercart(){
	    		this.$http.get('/usercart')
                   .then((response)=>{
                       console.log(response.data)
                       this.cart = response.data
                   })
	    	},
	    	
	    }



    }
</script>

<style scoped>
</style>