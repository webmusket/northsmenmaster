<template>
    <div >
        <modal>
            <transition class="row">
                <div class="card col-lg-6">
                    <div>
                        <froalaView v-model="value"></froalaView>
                    </div>
                    <div >
                        
                        <div >
                            <div >
                                <button @click="$emit('closeisopen')" >
                                    Cancel
                                </button>
                                <button @click="updateSettings()">
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

import VueFroala from 'vue-froala-wysiwyg';

export default {
    props: ['value','identifier'],
    components: {
        VueFroala
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
            axios.put("/updatesettings", {value: this.value,identifier: this.identifier})
                .then(response => {
                     this.$parent.loadSetting();
                    
                    this.$toasted.success(response.data, {
                        duration : 1000,
                            // onComplete : () => window.location.reload(true)
                        })
                    
                    this.$emit('closeisopen')
                })
                //  .catch(() => this.error = true)
                 
        },
    }
}

</script>

<style scoped>

@import "~froala-editor/css/froala_editor.pkgd.min.css";
@import "~froala-editor/css/froala_style.min.css";


</style>