<template>
    <div>
        <modal>
            <transition>
                <div class="bg-white rounded-lg shadow-lg" style="width: 1000px;">

                    <div  class="p-8">
                        <vue-editor v-model="value"></vue-editor>
                    </div>
                    <div  class="bg-30 px-6 py-3 flex">
                        
                        <div class="w-full  flex justify-end">
                            <div class="ml-auto">
                                <button @click="$emit('closeisopen')" type="button" class="btn text-80 font-normal h-9 px-3 mr-3 btn-link">
                                    Cancel
                                </button>
                                <button @click="updateSettings()" class="btn btn-default btn-primary">
                                    Update item
                                </button>
                            </div>
                            
                        </div>
                    </div>

                </div>
            </transition>
        </modal>
    </div>
</template>

<script>

import { VueEditor } from "vue2-editor/dist/vue2-editor.core.js";

export default {
    props: ['value','identifier'],
    components: {
        VueEditor
    },
    data() {
        return {
           
        }
    },

    mounted() {
        //
    },

    methods:{
        updateSettings(){
            Nova.request().put("/nova-vendor/site-settings/updatesettings", {value: this.value,identifier: this.identifier})
                .then(response => {
                     this.$parent.loadSetting();
                     
                     
                    this.$toasted.success(response.data, {
                        duration : 1000,
                            // onComplete : () => window.location.reload(true)
                        })
                    
                    this.$emit('closeisopen')
                })
                 .catch(() => this.error = true)
                 
        },
    }
}

</script>

<style scoped>

@import "~vue2-editor/dist/vue2-editor.css";

/* Import the Quill styles you want */
@import '~quill/dist/quill.core.css';
@import '~quill/dist/quill.bubble.css';
@import '~quill/dist/quill.snow.css';

</style>