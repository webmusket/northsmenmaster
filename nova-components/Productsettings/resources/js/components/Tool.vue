<template>
	<div>
  		<div><h1 class="mb-3 text-90 font-normal text-2xl">Customization Settings</h1></div>
	  	<div class="card mb-6 py-3 px-6">
		    <div class="flex border-b border-40 remove-bottom-border">
		        <div class="w-full py-4">
		            <CarouselCard :interval="100000" height="600px" type="card">
					  <CarouselCardItem v-for="style in this.jacketstyles">

					    	<div style="width: 700px;" class="card"> 
								<div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
								  <p class="font-bold">{{style.name}}</p>
								  <p class="text-sm">Select the option you want for the product settings</p>
								</div>
							    <table cellpadding="0" cellspacing="0" data-testid="resource-table" class="table w-full"> 
                                    <tbody>

                                        <tr v-for="option in style.styleoptions" dusk="32-row">
                                            <td class="space">
                                                
                                            </td>
                                            <td class="td-fit text-right pr-6 align-middle">
                                            	<input style="width: 30px;height: 30px;" type="radio" :id="option.variantId" class="form-radio" :name="option.type" v-model="option.variantId">
                                            </td>
                                            <td >
                                                <p class="text-center">
                                                    <img :src="path+ option.variantImage2" class="align-bottom w-8 h-8 rounded-full" style="object-fit: cover;">
                                                </p>
                                            </td>
                                            <td>
                                                <div class="text-left text-left" via-resource="" via-resource-id=""><span class="whitespace-no-wrap">{{option.variantType}}</span></div>
                                            </td>

                                            <td class="td-fit text-right pr-6 align-middle">
                                                <div class="inline-flex items-center">
                                                    <button @click="open(option.id,'option')"  title="Settings" class="inline-flex appearance-none cursor-pointer text-70 hover:text-primary mr-3">
                                                        <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" d="M9 4.58V4c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v.58a8 8 0 0 1 1.92 1.11l.5-.29a2 2 0 0 1 2.74.73l1 1.74a2 2 0 0 1-.73 2.73l-.5.29a8.06 8.06 0 0 1 0 2.22l.5.3a2 2 0 0 1 .73 2.72l-1 1.74a2 2 0 0 1-2.73.73l-.5-.3A8 8 0 0 1 15 19.43V20a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-.58a8 8 0 0 1-1.92-1.11l-.5.29a2 2 0 0 1-2.74-.73l-1-1.74a2 2 0 0 1 .73-2.73l.5-.29a8.06 8.06 0 0 1 0-2.22l-.5-.3a2 2 0 0 1-.73-2.72l1-1.74a2 2 0 0 1 2.73-.73l.5.3A8 8 0 0 1 9 4.57zM7.88 7.64l-.54.51-1.77-1.02-1 1.74 1.76 1.01-.17.73a6.02 6.02 0 0 0 0 2.78l.17.73-1.76 1.01 1 1.74 1.77-1.02.54.51a6 6 0 0 0 2.4 1.4l.72.2V20h2v-2.04l.71-.2a6 6 0 0 0 2.41-1.4l.54-.51 1.77 1.02 1-1.74-1.76-1.01.17-.73a6.02 6.02 0 0 0 0-2.78l-.17-.73 1.76-1.01-1-1.74-1.77 1.02-.54-.51a6 6 0 0 0-2.4-1.4l-.72-.2V4h-2v2.04l-.71.2a6 6 0 0 0-2.41 1.4zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>
                                                    </button> 
                                                    <button  :title="option.title" class="inline-flex appearance-none cursor-pointer text-70 hover:text-primary mr-3">
                                                        <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zM10.59 8.59a1 1 0 1 1-1.42-1.42 4 4 0 1 1 5.66 5.66l-2.12 2.12a1 1 0 1 1-1.42-1.42l2.12-2.12A2 2 0 0 0 10.6 8.6zM12 18a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/></svg>
                                                    </button> 
                                                </div>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
							    
							</div>
					  </CarouselCardItem>
					  
					</CarouselCard>
			    </div>
		    </div>
		</div>
	</div>
</template>

<script>

import { CarouselCard, CarouselCardItem } from 'vue-carousel-card'
import 'vue-carousel-card/styles/index.css'

export default {
	components: { CarouselCard, CarouselCardItem },
	  props: ['resourceName', 'resourceId', 'panel'],

	  data() {
        return {
            jacketstyles: "",
        }
    },

	  mounted() {
	    this.getJacketStyles();
	  },

	  methods: {
	  		getJacketStyles(){
	            Nova.request().get("/nova-vendor/product-style/jacketstyles")
	                .then(response => {
	                    console.log(response.data)
	                     this.jacketstyles = response.data.jacketstyles
	                })
	                // .catch(() => this.error = true)
	        },
	  }
}
</script>
