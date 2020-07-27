<template>
    <div>
        <heading class="mb-6">Customization Settings</heading>
        <tabs>
            <tab name="Jacket Customization">

                <div class="flex border-b border-40" >
                    <div class="bg-20 remove-last-margin-bottom leading-normal w-full py-4 px-8">
                        <h3 class="text-black">Style</h3>
                    </div>
                </div>

                <div v-for="style in this.jacketstyles">
                    <collapse :selected="false">
                        <div slot="collapse-header">
                            <div class="overflow-hidden overflow-x-auto relative" style="">
                                <table cellpadding="0" cellspacing="0" class="table w-full"> 
                                    <tbody>
                                        <tr dusk="5-row">
                                            <td class="space">
                                                
                                            </td>
                                            <td class="td-fit text-right pr-6 align-middle">
                                                <button data-testid="users-items-0-delete-button" dusk="32-delete-button" title="Delete" class="inline-flex appearance-none cursor-pointer text-70 hover:text-primary mr-3">
                                                    <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" d="M5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2zm0 2v14h14V5H5zm8 6h2a1 1 0 0 1 0 2h-2v2a1 1 0 0 1-2 0v-2H9a1 1 0 0 1 0-2h2V9a1 1 0 0 1 2 0v2z"/></svg>
                                                </button> 
                                            </td>
                                            <td class="space">
                                                
                                            </td>
                                            <td>
                                                <p class="text-center"><img :src="path + style.image" class="align-bottom w-8 h-8 rounded-full" style="object-fit: cover;"></p>
                                                
                                            </td>

                                            <td class="space">
                                                
                                            </td>
                                            <td class="dataname">
                                                <div class="text-left text-left" via-resource="" via-resource-id=""><span class="whitespace-no-wrap">{{style.name}}</span></div>
                                            </td>
                                            <td class="space">
                                                
                                            </td>

                                            <td class="td-fit text-right pr-6 align-middle">
                                                <div class="inline-flex items-center">
                                                    
                                                    <button @click="open(style.id,'style')" title="Settings" class="inline-flex appearance-none cursor-pointer text-70 hover:text-primary mr-3">
                                                        <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" d="M9 4.58V4c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v.58a8 8 0 0 1 1.92 1.11l.5-.29a2 2 0 0 1 2.74.73l1 1.74a2 2 0 0 1-.73 2.73l-.5.29a8.06 8.06 0 0 1 0 2.22l.5.3a2 2 0 0 1 .73 2.72l-1 1.74a2 2 0 0 1-2.73.73l-.5-.3A8 8 0 0 1 15 19.43V20a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-.58a8 8 0 0 1-1.92-1.11l-.5.29a2 2 0 0 1-2.74-.73l-1-1.74a2 2 0 0 1 .73-2.73l.5-.29a8.06 8.06 0 0 1 0-2.22l-.5-.3a2 2 0 0 1-.73-2.72l1-1.74a2 2 0 0 1 2.73-.73l.5.3A8 8 0 0 1 9 4.57zM7.88 7.64l-.54.51-1.77-1.02-1 1.74 1.76 1.01-.17.73a6.02 6.02 0 0 0 0 2.78l.17.73-1.76 1.01 1 1.74 1.77-1.02.54.51a6 6 0 0 0 2.4 1.4l.72.2V20h2v-2.04l.71-.2a6 6 0 0 0 2.41-1.4l.54-.51 1.77 1.02 1-1.74-1.76-1.01.17-.73a6.02 6.02 0 0 0 0-2.78l-.17-.73 1.76-1.01-1-1.74-1.77 1.02-.54-.51a6 6 0 0 0-2.4-1.4l-.72-.2V4h-2v2.04l-.71.2a6 6 0 0 0-2.41 1.4zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>
                                                    </button> 
                                                    <button data-testid="users-items-0-delete-button" dusk="32-delete-button" :title="style.title" class="inline-flex appearance-none cursor-pointer text-70 hover:text-primary mr-3">
                                                        <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zM10.59 8.59a1 1 0 1 1-1.42-1.42 4 4 0 1 1 5.66 5.66l-2.12 2.12a1 1 0 1 1-1.42-1.42l2.12-2.12A2 2 0 0 0 10.6 8.6zM12 18a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/></svg>
                                                    </button> 
                                                   
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div slot="collapse-body">
                            <div class="overflow-hidden overflow-x-auto relative" style="">
                                <table cellpadding="0" cellspacing="0" data-testid="resource-table" class="table w-full"> 
                                    <tbody>

                                        <tr v-for="option in style.styleoptions" dusk="32-row">
                                            <td class="space">
                                                
                                            </td>
                                            <td class="td-fit text-right pr-6 align-middle">
                                                   <input v-model="checkedstyles" style="width: 30px;height: 30px;" type="checkbox" :id="option.variantId" class="form-radio" :name="option.type" :value="option.variantId"> 
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
                        </div>
                    </collapse>
                </div>

<!--                 <div class="flex border-b border-40" >
                    <div class="bg-20 remove-last-margin-bottom leading-normal w-full py-4 px-8">
                        <h3 class="text-black">Accents</h3>
                    </div>
                </div>

                <div v-for="style in this.jacketaccents">
                    <collapse :selected="false">
                        <div slot="collapse-header">
                            <div class="overflow-hidden overflow-x-auto relative" style="">
                                <table cellpadding="0" cellspacing="0" class="table w-full"> 
                                    <tbody>
                                        <tr dusk="5-row">
                                            <td class="td-fit text-right pr-6 align-middle">
                                                    <button data-testid="users-items-0-delete-button" dusk="32-delete-button" title="Delete" class="inline-flex appearance-none cursor-pointer text-70 hover:text-primary mr-3">
                                                        <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" d="M5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2zm0 2v14h14V5H5zm8 6h2a1 1 0 0 1 0 2h-2v2a1 1 0 0 1-2 0v-2H9a1 1 0 0 1 0-2h2V9a1 1 0 0 1 2 0v2z"/></svg>
                                                    </button> 
                                            </td>
                                            <td class="space">
                                                
                                            </td>
                                            <td>
                                                <p class="text-center"><img :src="path + style.image" class="align-bottom w-8 h-8 rounded-full" style="object-fit: cover;"></p>
                                                
                                            </td>

                                            <td class="space">
                                                
                                            </td>
                                            <td class="dataname">
                                                <div class="text-left text-left" via-resource="" via-resource-id=""><span class="whitespace-no-wrap">{{style.name}}</span></div>
                                            </td>
                                            <td class="space">
                                                
                                            </td>

                                            <td class="td-fit text-right pr-6 align-middle">
                                                <div class="inline-flex items-center">
                                                    
                                                    <button @click="open(style.id,'style')" title="Settings" class="inline-flex appearance-none cursor-pointer text-70 hover:text-primary mr-3">
                                                        <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" d="M9 4.58V4c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v.58a8 8 0 0 1 1.92 1.11l.5-.29a2 2 0 0 1 2.74.73l1 1.74a2 2 0 0 1-.73 2.73l-.5.29a8.06 8.06 0 0 1 0 2.22l.5.3a2 2 0 0 1 .73 2.72l-1 1.74a2 2 0 0 1-2.73.73l-.5-.3A8 8 0 0 1 15 19.43V20a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-.58a8 8 0 0 1-1.92-1.11l-.5.29a2 2 0 0 1-2.74-.73l-1-1.74a2 2 0 0 1 .73-2.73l.5-.29a8.06 8.06 0 0 1 0-2.22l-.5-.3a2 2 0 0 1-.73-2.72l1-1.74a2 2 0 0 1 2.73-.73l.5.3A8 8 0 0 1 9 4.57zM7.88 7.64l-.54.51-1.77-1.02-1 1.74 1.76 1.01-.17.73a6.02 6.02 0 0 0 0 2.78l.17.73-1.76 1.01 1 1.74 1.77-1.02.54.51a6 6 0 0 0 2.4 1.4l.72.2V20h2v-2.04l.71-.2a6 6 0 0 0 2.41-1.4l.54-.51 1.77 1.02 1-1.74-1.76-1.01.17-.73a6.02 6.02 0 0 0 0-2.78l-.17-.73 1.76-1.01-1-1.74-1.77 1.02-.54-.51a6 6 0 0 0-2.4-1.4l-.72-.2V4h-2v2.04l-.71.2a6 6 0 0 0-2.41 1.4zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>
                                                    </button> 
                                                    <button data-testid="users-items-0-delete-button" dusk="32-delete-button" :title="style.title" class="inline-flex appearance-none cursor-pointer text-70 hover:text-primary mr-3">
                                                        <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zM10.59 8.59a1 1 0 1 1-1.42-1.42 4 4 0 1 1 5.66 5.66l-2.12 2.12a1 1 0 1 1-1.42-1.42l2.12-2.12A2 2 0 0 0 10.6 8.6zM12 18a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/></svg>
                                                    </button> 
                                                   
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div slot="collapse-body">
                            <div class="overflow-hidden overflow-x-auto relative" style="">
                                <table cellpadding="0" cellspacing="0" data-testid="resource-table" class="table w-full"> 
                                    <tbody>

                                        <tr v-for="option in style.styleoptions" dusk="32-row">
                                            <td class="space">
                                                
                                            </td>
                                            <td class="td-fit text-right pr-6 align-middle">
                                                    <button data-testid="users-items-0-delete-button" dusk="32-delete-button" title="Delete" class="inline-flex appearance-none cursor-pointer text-70 hover:text-primary mr-3">
                                                        <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" d="M5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2zm0 2v14h14V5H5zm11 7a1 1 0 0 1-1 1H9a1 1 0 0 1 0-2h6a1 1 0 0 1 1 1z"/></svg>
                                                    </button> 
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
                        </div>
                    </collapse>
                </div> -->
                <div style="margin-top: 50px;" class="flex border-b border-40" >
                    <div class="bg-20 remove-last-margin-bottom leading-normal w-full py-4 px-8">
                        <h3 class="text-black">Fabric</h3>
                    </div>
                </div>
                <div>
                    <file-manager></file-manager>
                </div>

                <div style="margin-top: 50px;" class="flex border-b border-40" >
                    <div class="bg-20 remove-last-margin-bottom leading-normal w-full py-4 px-8">
                        <h3 class="text-black">Attach Customizaton to Custom Product</h3>
                    </div>
                </div>
                <div>
                     <div class="w-full flex flex-wrap">
                        <div class="w-3/4">
                            <select v-model='fabricname'  @change="showselection"  class="form-control form-select w-full">
                                  <option value="0" disabled>select a custom Product</option>
                                    <option v-for="fabric in fabrics" :value="fabric.slug" >
                                      {{fabric.title}}
                                    </option>
                            </select>
                        </div>
                        <div class="w-1/4 py-2 text-right">
                          <a @click="showcustomizations(true)" title="Settings" class="inline-flex appearance-none cursor-pointer text-70 hover:text-primary mr-3">
                                  <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" d="M9 4.58V4c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v.58a8 8 0 0 1 1.92 1.11l.5-.29a2 2 0 0 1 2.74.73l1 1.74a2 2 0 0 1-.73 2.73l-.5.29a8.06 8.06 0 0 1 0 2.22l.5.3a2 2 0 0 1 .73 2.72l-1 1.74a2 2 0 0 1-2.73.73l-.5-.3A8 8 0 0 1 15 19.43V20a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-.58a8 8 0 0 1-1.92-1.11l-.5.29a2 2 0 0 1-2.74-.73l-1-1.74a2 2 0 0 1 .73-2.73l.5-.29a8.06 8.06 0 0 1 0-2.22l-.5-.3a2 2 0 0 1-.73-2.72l1-1.74a2 2 0 0 1 2.73-.73l.5.3A8 8 0 0 1 9 4.57zM7.88 7.64l-.54.51-1.77-1.02-1 1.74 1.76 1.01-.17.73a6.02 6.02 0 0 0 0 2.78l.17.73-1.76 1.01 1 1.74 1.77-1.02.54.51a6 6 0 0 0 2.4 1.4l.72.2V20h2v-2.04l.71-.2a6 6 0 0 0 2.41-1.4l.54-.51 1.77 1.02 1-1.74-1.76-1.01.17-.73a6.02 6.02 0 0 0 0-2.78l-.17-.73 1.76-1.01-1-1.74-1.77 1.02-.54-.51a6 6 0 0 0-2.4-1.4l-.72-.2V4h-2v2.04l-.71.2a6 6 0 0 0-2.41 1.4zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>
                                </a> 
                                <a  title="" class="inline-flex appearance-none cursor-pointer text-70 hover:text-primary mr-3">
                                    <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zM10.59 8.59a1 1 0 1 1-1.42-1.42 4 4 0 1 1 5.66 5.66l-2.12 2.12a1 1 0 1 1-1.42-1.42l2.12-2.12A2 2 0 0 0 10.6 8.6zM12 18a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/></svg>
                                </a> 
                        </div>
                    </div>
                    <div v-if="showselectedstyle" class="card mb-6 py-3 px-6">
                        <div class="flex border-b border-40">
                            <div class="w-1/4 py-4">
                                <h4 class="font-normal text-80">Jakect Type</h4></div>
                            <div class="w-3/4 py-4 break-words">
                                <p class="text-90">
                                    {{checkedstyles[0]}}
                                </p>
                            </div>
                        </div>
                        <div class="flex border-b border-40">
                            <div class="w-1/4 py-4">
                                <h4 class="font-normal text-80">Jakect Lapels</h4></div>
                            <div class="w-3/4 py-4 break-words">
                                <p class="text-90">
                                    {{checkedstyles[1]}}
                                </p>
                            </div>
                        </div>
                        <div class="flex border-b border-40 remove-bottom-border">
                            <div class="w-1/4 py-4">
                                <h4 class="font-normal text-80">Jakect Fittings</h4></div>
                            <div class="w-3/4 py-4 break-words">
                                <p class="text-90">
                                    {{checkedstyles[2]}}
                                </p>
                            </div>
                        </div>
                        <div class="flex border-b border-40 remove-bottom-border">
                            <div class="w-1/4 py-4">
                                <h4 class="font-normal text-80">Jacket Breast Pockets</h4></div>
                            <div class="w-3/4 py-4 break-words">
                                <p class="text-90">
                                    {{checkedstyles[3]}}
                                </p>
                            </div>
                        </div>
                        <div class="flex border-b border-40 remove-bottom-border">
                            <div class="w-1/4 py-4">
                                <h4 class="font-normal text-80">Jakect Pockets</h4></div>
                            <div class="w-3/4 py-4 break-words">
                                <p class="text-90">
                                    {{checkedstyles[4]}}
                                </p>
                            </div>
                        </div>
                        <div class="flex border-b border-40 remove-bottom-border">
                            <div class="w-1/4 py-4">
                                <h4 class="font-normal text-80">Jakect Sleeve Buttons</h4></div>
                            <div class="w-3/4 py-4 break-words">
                                <p class="text-90">
                                    {{checkedstyles[5]}}
                                </p>
                            </div>
                        </div>
                        <div class="flex border-b border-40 remove-bottom-border">
                            <div class="w-1/4 py-4">
                                <h4 class="font-normal text-80">Jakect Vents</h4></div>
                            <div class="w-3/4 py-4 break-words">
                                <p class="text-90">
                                    {{checkedstyles[6]}}
                                </p>
                            </div>
                        </div>

                        <div class="flex items-right">
                            <button @click="attachcusmsettings" style="margin-left: 735px;" type="button" class="btn btn-default btn-primary inline-flex items-center relative mr-3" ><span class="">
                                Ok! Attach
                              </span>
                            </button>
                        </div>

                    </div>
                </div>
                

                
                

            </tab>


            <tab name="Pant Customization">

            </tab>
            

            <tab name="Vest Customization">

            </tab>
            <tab name="Shirt Customization">

            </tab>
        </tabs>
         <hr>

        <!-- <file-manager v-if="showModal" @close="showModal = false"></file-manager> -->
       
        <modal v-if="isOpen" @closeisopen="isOpen = false" :identifier="identifier" :stylebyid="stylebyid" ></modal>

    </div>
</template>

<script>




import Collapse from 'vue-collapse'

import Modal from './Modal.vue'

import FileManager from './FileManager.vue'

export default {
    components: {
        Collapse,
         Modal,
         FileManager
    },
    data() {
        return {
            isOpen: false,

            showModal: false,

            jacketstyles: "",

            checkedstyles: [],

            fabrics: '',

            fabricname: 0,

            showselectedstyle: false,
            // jacketfabrics: '',
            // jacketaccents: '',



            stylebyid: "",
            identifier: '',
            path: "http://127.0.0.1:8000/image/",
            
        }
    },
    mounted() {
        this.getJacketStyles();
        // this.getJacketFabrics();
        // this.getJacketAccents();
        this.getFabrics();


         
    },

    methods: {
        // editStyle(){
        //     // this.$modal.show('style');
        //     alert()
        // },

        open(id,identifier){
            this.isOpen = true
            this.identifier = identifier
            Nova.request().get("/nova-vendor/product-style/getstylebyid/"+id+'/'+identifier)
                  .then(response => {
                       this.stylebyid = response.data.style
                  })
                  .catch(() => this.error = true)
            this.isOpen = true
            event.stopImmediatePropagation();
        },
        // onClickChild(){
        //     this.isOpen = false
        // },

        attachcusmsettings(){
            Nova.request().get("/nova-vendor/product-style/updatecussettings/"+this.fabricname+'/'+this.checkedstyles)
                .then(response => {
                    console.log(response.data)
                })
                // .catch(() => this.error = true)
        },

        getFabrics(){
            Nova.request().get("/nova-vendor/product-style/getfabrics")
                .then(response => {
                    // console.log(response.data)
                     this.fabrics = response.data.getfabrics
                })
                .catch(() => this.error = true)
        },


        showselection(){
            this.showselectedstyle = true
        },





        getJacketStyles(){
            Nova.request().get("/nova-vendor/product-style/jacketstyles")
                .then(response => {
                    console.log(response.data)
                     this.jacketstyles = response.data.jacketstyles
                     this.isOpen = false
                })
                // .catch(() => this.error = true)
        },

        getJacketFabrics(){
            Nova.request().get("/nova-vendor/product-style/jacketfabrics")
                .then(response => {
                    console.log(response.data)
                     this.jacketfabrics = response.data.jacketfabrics
                     this.isOpen = false
                })
                // .catch(() => this.error = true)
        },

           
     

        // getJacketAccents(){
        //     Nova.request().get("/nova-vendor/product-style/jacketaccents")
        //         .then(response => {
        //             console.log(response.data)
        //              this.jacketaccents = response.data.jacketaccents
        //              this.isOpen = false
        //         })
        //         // .catch(() => this.error = true)
        // }

    }
}
</script>

<style>
/* Scoped Styles */
.collapse .collapse-header {
    padding: 0px 0px 0px 0px !important;
    
}
.dataname{
    width: 650px;
}


.collapse .collapse-item{
    margin-left: 100px !important;
}

.tabs-component-panels{
    padding: 50px;
}


</style>
