<template>
    <div>
        <div class="content">
            <div  v-html="homesettings.customize_head">
            
            </div>
            <button @click="control(homesettings.customize_head, 'customize_head')" > 
                    <i class="fa fa-edit"></i>              
            </button>
        </div>
        <control v-if="isOpen == true" @closeisopen="isOpen = false" :value = "value" :identifier="identifier" ></control>
    </div>
</template>


<script>


import Control from './Control.vue'

export default {
  	props:[''],
  	 components: {
	    Control,
	  },

	data () {
		return {
			isOpen: false,
            homesettings:{},
            value: '',
            identifier: ''
		}
	},
	mounted() {
        this.loadSetting()
    },

    methods:{
        control(editable,identifier){
            this.isOpen = true
            this.value = editable
            this.identifier = identifier
        },
        loadSetting() {
            axios.get("/default-setting")
                .then(response => {
                        this.homesettings = response.data.homesettings
                        // this.documents = response.data.documents
                        // this.status = response.data.status
                })
                // .catch(() => this.error = true)
        },
        
    }
}
</script>

<style scoped>
/* Scoped Styles */


/* .ql-container.ql-snow {
    border: 0 !important;
} */

</style>

