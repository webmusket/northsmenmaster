<template>
    <div>
        <heading class="mb-6">Site Settings</heading>
        <tabs>
            <tab name="HomePage Settings">
                <div class="flex border-b border-40" >
                    <div class="bg-20 remove-last-margin-bottom leading-normal w-full py-4 px-8">
                        <h3 class="text-black">Customize Text</h3>
                    </div>
                </div>

                

                <div class="flex border-b border-40">
                    <div class="w-1/4 px-8 py-6">
                        <label class="inline-block text-80 h-9 pt-2">Heading</label>
                        <p class="text-sm leading-normal text-80 italic"></p>
                    </div>
                    <div v-html="homesettings.customize_head" class="py-6 px-8 w-1/2">

                        <!-- <input v-model="homesettings.customize_head"  placeholder="Customize Heading" type="text" class="w-full form-control form-input form-input-bordered"> -->
                    </div>
                    <div class="py-6 px-8 w-1/4">
                        <button @click="control(homesettings.customize_head, 'customize_head')" class="py-2"> 
                            <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" d="M9 4.58V4c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v.58a8 8 0 0 1 1.92 1.11l.5-.29a2 2 0 0 1 2.74.73l1 1.74a2 2 0 0 1-.73 2.73l-.5.29a8.06 8.06 0 0 1 0 2.22l.5.3a2 2 0 0 1 .73 2.72l-1 1.74a2 2 0 0 1-2.73.73l-.5-.3A8 8 0 0 1 15 19.43V20a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-.58a8 8 0 0 1-1.92-1.11l-.5.29a2 2 0 0 1-2.74-.73l-1-1.74a2 2 0 0 1 .73-2.73l.5-.29a8.06 8.06 0 0 1 0-2.22l-.5-.3a2 2 0 0 1-.73-2.72l1-1.74a2 2 0 0 1 2.73-.73l.5.3A8 8 0 0 1 9 4.57zM7.88 7.64l-.54.51-1.77-1.02-1 1.74 1.76 1.01-.17.73a6.02 6.02 0 0 0 0 2.78l.17.73-1.76 1.01 1 1.74 1.77-1.02.54.51a6 6 0 0 0 2.4 1.4l.72.2V20h2v-2.04l.71-.2a6 6 0 0 0 2.41-1.4l.54-.51 1.77 1.02 1-1.74-1.76-1.01.17-.73a6.02 6.02 0 0 0 0-2.78l-.17-.73 1.76-1.01-1-1.74-1.77 1.02-.54-.51a6 6 0 0 0-2.4-1.4l-.72-.2V4h-2v2.04l-.71.2a6 6 0 0 0-2.41 1.4zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>               
                        </button>
                    </div>
                </div>


                <div class="flex border-b border-40">
                    <div class="w-1/4 px-8 py-6">
                        <label for="excerpt" class="inline-block text-80 pt-2 leading-tight">
                            Customize Description
                        </label>
                    </div>
                    <div class="py-6 px-8 w-1/2">
                        <textarea  rows="3" placeholder="Description" class="w-full form-control form-input form-input-bordered py-3 h-auto"></textarea>
                    </div>
                    <div class="py-6 px-8 w-1/4">
                        <button @click="control()" class="py-2"> 
                            <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" d="M9 4.58V4c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v.58a8 8 0 0 1 1.92 1.11l.5-.29a2 2 0 0 1 2.74.73l1 1.74a2 2 0 0 1-.73 2.73l-.5.29a8.06 8.06 0 0 1 0 2.22l.5.3a2 2 0 0 1 .73 2.72l-1 1.74a2 2 0 0 1-2.73.73l-.5-.3A8 8 0 0 1 15 19.43V20a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-.58a8 8 0 0 1-1.92-1.11l-.5.29a2 2 0 0 1-2.74-.73l-1-1.74a2 2 0 0 1 .73-2.73l.5-.29a8.06 8.06 0 0 1 0-2.22l-.5-.3a2 2 0 0 1-.73-2.72l1-1.74a2 2 0 0 1 2.73-.73l.5.3A8 8 0 0 1 9 4.57zM7.88 7.64l-.54.51-1.77-1.02-1 1.74 1.76 1.01-.17.73a6.02 6.02 0 0 0 0 2.78l.17.73-1.76 1.01 1 1.74 1.77-1.02.54.51a6 6 0 0 0 2.4 1.4l.72.2V20h2v-2.04l.71-.2a6 6 0 0 0 2.41-1.4l.54-.51 1.77 1.02 1-1.74-1.76-1.01.17-.73a6.02 6.02 0 0 0 0-2.78l-.17-.73 1.76-1.01-1-1.74-1.77 1.02-.54-.51a6 6 0 0 0-2.4-1.4l-.72-.2V4h-2v2.04l-.71.2a6 6 0 0 0-2.41 1.4zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>               
                        </button>
                    </div>
                </div>



<!-- 
                <div class="flex border-b border-40" >
                    <div class="bg-20 remove-last-margin-bottom leading-normal w-full py-4 px-8">
                        <h3 class="text-black">Customize Text</h3>
                    </div>
                </div> -->




<!--                 
                <div class="flex flex-wrap -mx-3 mb-3 ">
                    <div class="px-3 mb-6 w-1/3 bg-gray">
                        <h1>hello world</h1>
                    </div>

                    <div class="px-3 mb-6 w-1/3">
                        
                    </div>
                    <div class="px-3 mb-6 w-1/3">
                        
                    </div>
                </div> -->
            </tab>
            <tab name="Second tab">
                Second tab content
            </tab>
            <tab name="Third tab">
                Third tab content
            </tab>
        </tabs>

        <control v-if="isOpen == true" @closeisopen="isOpen = false" :value = "value" :identifier="identifier" ></control>
        
    </div>
</template>

<script>



import Control from './Control.vue'

export default {
    components: {
         Control,

    },
    data() {
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
            Nova.request().get("/nova-vendor/site-settings/default-setting")
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




</style>
