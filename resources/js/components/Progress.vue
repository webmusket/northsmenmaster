<template>
  <div class="container">
          <step-progress :steps="mySteps" :current-step="currentstatus" icon-class="fa fa-check"></step-progress>
      </div>
</template>


<script>
import StepProgress from 'vue-step-progress';
 
// import the css (OPTIONAL - you can provide your own design)
import 'vue-step-progress/dist/main.css';

export default {
  	props:['length'],
  	 components: {
	    'step-progress': StepProgress
	  },

	data () {
		return {
			currentstatus: 0,
			mySteps:[
				"New",
				"Hold",
				"Delivered",
				"Cancel"
			],
			active : ''
		}
	},
	mounted(){
		
	},

	created(){

		
		const uri = `/getorderstatus`;
	    this.$http.get(uri).then((response) => {
	    	this.currentstatus = this.mySteps.indexOf(response.data)
	    });


	},

	

	method: {

	}

}


</script>




