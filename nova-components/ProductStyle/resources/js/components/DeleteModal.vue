<template>
	<modal>
          <transition>
          	<div class="bg-white rounded-lg shadow-lg" style="width: 600px;">
                <form  @submit.prevent="deleteFolder()">
                	<div class="w-full flex flex-wrap">
                		<p class="text-center px-6 py-8">Are You Sure to delete {{folder}}?</p>

                	</div>
		            <div  class="bg-30 px-6 py-3 flex">
		                <div class="w-full  flex justify-end">
		                    <div class="ml-auto">
		                        <button @click="$emit('closedel')" type="button" class="btn text-80 font-normal h-9 px-3 mr-3 btn-link">
		                            Cancel
		                        </button>
		                        <button type="submit" class="btn btn-default btn-primary">
		                            Yes ! Delete
		                        </button>
		                    </div>
		                    
		                </div>
		            </div>
		        </form>
		    </div>
          </transition>

      </modal>
</template>

<script>

export default {
	props: ['folder'],

    data: function() {
      return {

      };
    },

    methods:{



        deleteFolder(){
          Nova.request().get("/nova-vendor/product-style/delete-folder/"+this.folder)
            .then(response => {
            	this.$emit('closedel')
                this.$parent.getFolders();

            })
            .catch(() => this.error = true)
            
        },

          

    },

};

</script>

<style>
	
</style>