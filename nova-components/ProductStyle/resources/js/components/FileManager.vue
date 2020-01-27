<template>
  <div class="file-mana">
    <div class="w-full flex flex-wrap">
        <div class="w-3/4">
            <select v-model='fabricname' @change="changefabric" class="form-control form-select w-full">
                  <option value="0" disabled>select a fabric</option>
                    <option v-for="fabric in fabrics" :value="fabric.slug" >
                      {{fabric.title}}
                    </option>
            </select>
        </div>
        <div class="w-1/4 py-2 text-right">
          <a @click="showfolder(true)" title="Settings" class="inline-flex appearance-none cursor-pointer text-70 hover:text-primary mr-3">
                  <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" d="M9 4.58V4c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v.58a8 8 0 0 1 1.92 1.11l.5-.29a2 2 0 0 1 2.74.73l1 1.74a2 2 0 0 1-.73 2.73l-.5.29a8.06 8.06 0 0 1 0 2.22l.5.3a2 2 0 0 1 .73 2.72l-1 1.74a2 2 0 0 1-2.73.73l-.5-.3A8 8 0 0 1 15 19.43V20a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-.58a8 8 0 0 1-1.92-1.11l-.5.29a2 2 0 0 1-2.74-.73l-1-1.74a2 2 0 0 1 .73-2.73l.5-.29a8.06 8.06 0 0 1 0-2.22l-.5-.3a2 2 0 0 1-.73-2.72l1-1.74a2 2 0 0 1 2.73-.73l.5.3A8 8 0 0 1 9 4.57zM7.88 7.64l-.54.51-1.77-1.02-1 1.74 1.76 1.01-.17.73a6.02 6.02 0 0 0 0 2.78l.17.73-1.76 1.01 1 1.74 1.77-1.02.54.51a6 6 0 0 0 2.4 1.4l.72.2V20h2v-2.04l.71-.2a6 6 0 0 0 2.41-1.4l.54-.51 1.77 1.02 1-1.74-1.76-1.01.17-.73a6.02 6.02 0 0 0 0-2.78l-.17-.73 1.76-1.01-1-1.74-1.77 1.02-.54-.51a6 6 0 0 0-2.4-1.4l-.72-.2V4h-2v2.04l-.71.2a6 6 0 0 0-2.41 1.4zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>
                </a> 
                <a  title="" class="inline-flex appearance-none cursor-pointer text-70 hover:text-primary mr-3">
                    <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zM10.59 8.59a1 1 0 1 1-1.42-1.42 4 4 0 1 1 5.66 5.66l-2.12 2.12a1 1 0 1 1-1.42-1.42l2.12-2.12A2 2 0 0 0 10.6 8.6zM12 18a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/></svg>
                </a> 
        </div>
    </div>

    <div v-if="fabricname != 0" class="w-full flex flex-wrap file-mana">
      <p  class="px-6 py-2">Info: Upload Zip file for Fabric for {{this.fabricname}}</p>

      <vue-dropzone 
      class="w-full" 
      ref="myVueDropzone" 
      id="dropzone" 
      :options="dropzoneOptions" 
      v-on:vdropzone-success="SuccessMethod"
      v-on:vdropzone-queue-complete="someSuccessMethod"
      ></vue-dropzone>

      

    </div>

    <div v-if="showfolders" class="w-full flex flex-wrap file-mana">
        <div v-for="folder in folders" class="w-1/6 h-40  px-2 mb-3 ">
            <div @click="deletefolder(folder)" title="Click to Delete"  class="card relative flex flex-wrap justify-center border border-lg border-50 overflow-hidden px-0 py-0 cursor-pointer h-40 folder-item hovereffect">
              
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-2/3 h-5/6">
                    <path data-v-b4ddd64a="" fill="#B3C1D1" d="M20 6a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2h7.41l2 2H20zM4 6v12h16V8h-7.41l-2-2H4z"></path>
                </svg>

                <div  class="h-1/6 w-full text-center text-xs  border-t border-30 bg-50 flex items-center justify-center">
                    {{folder}}
                </div>
            </div>
        </div>
    </div>

    <delete-modal :folder="this.folder" v-if="delopen" @closedel="delopen = false"></delete-modal>



  </div>
</template>

<script>


import vue2Dropzone from 'vue2-dropzone'
import 'vue2-dropzone/dist/vue2Dropzone.min.css'

import DeleteModal from './DeleteModal.vue'

export default {
    props: [],
    components: {
        DeleteModal,
        vueDropzone: vue2Dropzone
    },
    data: function() {
      return {
        delopen: false,
        fabrics: '',
        fabricname: 0,
        // file: '',
        folders:'',
        showfolders: false, 
        folder: '',
       dropzoneOptions: {
            url: '/nova-vendor/product-style/formSubmit/',
            headers: {
              "X-CSRF-TOKEN": document.head.querySelector("[name=csrf-token]").content
             },

        }
        // success: ''
      };
    },

    mounted() {
      this.getFabrics()
      this.getFolders()
      
     
    },
    methods:{
        getFabrics(){
            Nova.request().get("/nova-vendor/product-style/getfabrics")
                .then(response => {
                    // console.log(response.data)
                     this.fabrics = response.data.getfabrics
                })
                .catch(() => this.error = true)
        },

        getFolders(){
          Nova.request().get("/nova-vendor/product-style/getfolders")
                .then(response => {
                     console.log(response.data.folders)
                     this.folders = response.data.folders
                })
                .catch(() => this.error = true)
        },
        showfolder(){
          this.showfolders = !this.showfolders
        },
        deletefolder(folder){
          this.folder = folder
          this.delopen = true
        },
        //dropzone
        changefabric(){
          const url = "/nova-vendor/product-style/formSubmit/" + this.fabricname
          this.dropzoneOptions.url = url
        },
        someSuccessMethod(){ 
          this.fabricname = 0
          this.showfolders = true
          this.getFolders()

        },
        SuccessMethod(){
          console.log('success')
          // Nova.request().get("/nova-vendor/product-style/formSubmit/" + this.fabricname)
          //       .then(response => {
          //            console.log(response.data)
          //            // this.folders = response.data.folders
          //            // this.$refs.myVueDropzone.removeAllFiles()
          //       })
        }
      

          

    },
    // computed:{
    //   fabric: function(){
    //     return this.fabricname
    //   }
    // }
};
</script>

<style scoped>
  .file-mana{
    margin-top: 20px;
  }
  .align-right{
    text-align: right;
  }
  .hovereffect:hover{
    background: #fb6969;
  }


</style>