<template>
	<div>
        <div class="alert alert-secondary" role="alert">
            A simple secondary alert—check it out!
        </div>
        <div class="row">

            <div v-for="data in measurement" class="col-lg-4">
                <div class="addresslist">
                    <div class="card" style="width: 18rem;">
                      <div class="card-body">
                        <h5 class="card-title">{{data.measurement_name}} <span v-if="data.own == 1" class="badge badge-warning">Your's</span>
                        <span v-if="data.own == 0" class="badge badge-info">Others</span></h5>
                        <h6 class="card-subtitle mb-2 text-muted">Height: {{data.height}} | Weight: {{data.weight}}</h6>
                        <button @click="showMeasurement(data.id)" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">View</button>
                        <a href="#" class="card-link">Edit</a>
                        <a href="#" class="card-link">Delete</a>
                      </div>
                    </div>
                </div>
            </div>

             <!-- Modal -->
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Measurement data for {{showmeasurement.measurement_name}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p>Height: {{showmeasurement.height}} </p>
                    <p>Weight: {{showmeasurement.weight}} </p>
                    <p>Chest: {{showmeasurement.chest}} </p>
                    <p>Hips: {{showmeasurement.hips}} </p>
                    <p>Stomach: {{showmeasurement.stomach}} </p>
                    <p>Waist: {{showmeasurement.waist}} </p>
                    <p>JacketLength: {{showmeasurement.jacket_length}} </p>
                    <p>Bicept: {{showmeasurement.bocept}} </p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>

        </div>

        
       

        <div class="addressbtn">
            <a class="nslightbtn" href="measurements.php">Add Mesurement</a>
        </div>

    </div>
</template>


<script>

    export default {
        name: "ProfileMeasurement",
        components: {

	    },

	    data(){
	    	return{
	    		measurement: "",
                showmeasurement:''
	    	}

	    },

	    computed:{
	    	
	    },

        mounted(){
        	 this.getuserdata();
        	
        },
	    methods:{
	    	getuserdata(){
	    		this.$http.get('/profilemeasurement')
                   .then((response)=>{
                       this.measurement = response.data
                   })
	    	},
            showMeasurement(id){
                this.$http.get('/showmeasurement/'+id)
                   .then((response)=>{
                       this.showmeasurement = response.data
                   })
            }
	    	
	    }



    }
</script>

<style scoped>
</style>