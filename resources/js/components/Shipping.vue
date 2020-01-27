<template>
    <div class="container">
          <div class="row">
          	<div v-for="rate in this.rates" class="col-lg-4">
          		<h5>{{rate.attributes}}</h5>
          		<h5>{{rate.currency}}</h5>
          		<h5>{{rate.amount_local}}</h5>
          		<h5>{{rate.provider}}</h5>
          		<button @click="getshippinglevel(rate.object_id)" >go for this plan</button>
          	</div>
          </div>
         
    </div>
</template>


<script>


export default {
  	props:['shipment'],
  	name: 'shipping',
  	 
	data () {
		return {
			shipmentdata : JSON.parse(this.shipment),
			leveldata: null
		}
	},
	mounted(){
		
	},

	created(){

		
		

	},

	computed:{
		rates: function(){
			return this.shipmentdata['rates']
		}
	},
	

	methods: {
		getshippinglevel(object_id){
			const uri = `/getshippinglevel/${object_id}`;
	        this.$http.get(uri).then((response) => {
	        	console.log(response.data['label_url'])
	        	return window.location.href = response.data['label_url'];


	        	
	        });
		}

	}

}


</script>




