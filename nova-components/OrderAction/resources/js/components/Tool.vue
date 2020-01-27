<template>
  	<div>
  		<div dusk="orders-detail-component" class="mb-8">
		    <div>
		        <div class="flex items-center mb-3">
		            <h1 style="text-transform: capitalize;" class="flex-no-shrink text-90 font-normal text-2xl">{{resourceName }} Events</h1>
		        </div>
		        <div v-if="type == 'orders'" class="card mb-6 py-3 px-6">
		        	<timeline>
					    <timeline-title>Order Status Timeline</timeline-title>
					    <span v-for="event in events">
					    	<timeline-item  bg-color="#9dd8e0" >
					    		<h3>{{event.updated_at}}</h3>
					    		<span>User Id</span>
					    		<p>{{event.user_id}}</p>
					    		<span>From Status</span>
					    		<p>{{JSON.parse(event.original).order_status }}</p>
					    		<span>To Status</span>
					    		<p>{{ JSON.parse(event.changes).order_status }}</p>
					    	</timeline-item>
					    </span>
					</timeline>
		        </div>

		    </div>
		</div>
	</div>

  
</template>

<script>

import { Timeline, TimelineItem, TimelineTitle } from 'vue-cute-timeline'

export default {
  props: ['resourceName', 'resourceId', 'panel'],

  	components: {
	    Timeline,
	    TimelineItem,
	    TimelineTitle
	  },

	data() {
	    return {
	        events: "",
	        type: '',
	        
	    }
	},

	mounted() {
		this.getEvents()
	},
	methods: {
	  	getEvents(){

	  		Nova.request().get("/nova-vendor/order-action/get-activities/"+this.resourceName+'/'+this.resourceId)
	          	.then(response => {
                    // console.log(response.data)
                     this.events = response.data.events
                 	this.type = response.data.type
                })
                // .catch(() => this.error = true)

	  	}
	  	
	}
}
</script>
