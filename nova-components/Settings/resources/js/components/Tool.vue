<template>
    <div>
        <heading class="mb-6">Settings Tool</heading>
        <tabs>
            <tab name="General">
                <div class="card overflow-hidden">
                    <form @submit.prevent="updateSetting">
                        <div>

                            

                            <div class="flex border-b border-40">
                                <div class="bg-20 remove-last-margin-bottom leading-normal w-full py-4 px-8">
                                    <h3>Environment Settings(Frontend)</h3>
                                    <div class="help-text help-text mt-2">
                                        These are used for the (optional) footer columns in the Modern (Premium) template, but can also be used for other elements in your custom template
                                    </div>
                                </div>
                            </div>

                            <div class="flex border-b border-40">
                                <div class="w-1/4 px-8 py-6">
                                    <label class="inline-block text-80 h-9 pt-2">App Name</label>
                                    <p class="text-sm leading-normal text-80 italic"></p>
                                </div>
                                <div class="py-6 px-8 w-1/2">
                                    <input v-model="general.app_name" placeholder="App Name" type="year" class="w-full form-control form-input form-input-bordered">
                                </div>
                            </div>
                            
                            <div class="flex border-b border-40">
                                <div class="w-1/4 px-8 py-6">
                                    <label class="inline-block text-80 h-9 pt-2">App Url</label>
                                    <p class="text-sm leading-normal text-80 italic"></p>
                                </div>
                                <div class="py-6 px-8 w-1/2">
                                    <input v-model="general.app_url" placeholder="App Url" type="year" class="w-full form-control form-input form-input-bordered">
                                </div>
                            </div>

                            <div class="flex border-b border-40">
                                <div class="w-1/4 px-8 py-6">
                                    <label for="profile_photo" class="inline-block text-80 pt-2 leading-tight">
                                        Shop Header/Logo
                                    </label>
                                </div>
                                <div class="w-2/4 px-8 py-6">
                                    <span class="form-file mr-4"><input   dusk="profile_photo" type="file" id="file-profile_photo" name="name" accept="image/*" class="form-file-input select-none"> <label for="file-profile_photo" class="form-file-btn btn btn-default btn-primary select-none">
                                    Choose File
                                  </label></span> 
                                </div>
                                <div class="w-1/4 px-8 py-6">
                                    <img  src="https://www.gravatar.com/avatar/59a60f10561531f5719b98b55f37b481?s=300" class="align-bottom w-8 h-8 rounded-full" style="object-fit: cover;">
                                    
                                </div>
                                
                            </div>

                            <div class="flex border-b border-40">
                                <div class="bg-20 remove-last-margin-bottom leading-normal w-full py-4 px-8">
                                    <h3>Environment Settings(Backend)</h3>
                                    <div class="help-text help-text mt-2">
                                        These are used for the (optional) footer columns in the Modern (Premium) template, but can also be used for other elements in your custom template
                                    </div>
                                </div>
                            </div>
                            <div class="flex border-b border-40">
                                <div class="w-1/4 px-8 py-6">
                                    <label class="inline-block text-80 h-9 pt-2">Admin App Name</label>
                                    <p class="text-sm leading-normal text-80 italic"></p>
                                </div>
                                <div class="py-6 px-8 w-1/2">
                                    <input v-model="general.admin_name" placeholder="App Name" type="year" class="w-full form-control form-input form-input-bordered">
                                </div>
                            </div>
                            <div class="flex border-b border-40">
                                <div class="w-1/4 px-8 py-6">
                                    <label class="inline-block text-80 h-9 pt-2">Admin Path</label>
                                    <p class="text-sm leading-normal text-80 italic"></p>
                                </div>
                                <div class="py-6 px-8 w-1/2">
                                    <input v-model="general.admin_url" placeholder="Admin Path" type="year" class="w-full form-control form-input form-input-bordered">
                                </div>
                            </div>
                            <div class="flex border-b border-40">
                                <div class="w-1/4 px-8 py-6">
                                    <label class="inline-block text-80 h-9 pt-2">Pagination</label>
                                    <p class="text-sm leading-normal text-80 italic"></p>
                                </div>
                                <div class="py-6 px-8 w-1/2">
                                    <select v-model="general.pagination" class="form-control form-select">
                                        <option value="simple" >
                                           Simple
                                        </option>
                                        <option value="links" >
                                           Links
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="flex border-b border-40">
                                <div class="bg-20 remove-last-margin-bottom leading-normal w-full py-4 px-8">
                                    <h3>Mail Settings</h3>
                                    <div class="help-text help-text mt-2">
                                        These are used for the (optional) footer columns in the Modern (Premium) template, but can also be used for other elements in your custom template
                                    </div>
                                </div>
                            </div>

                            <div class="flex border-b border-40">
                                <div class="w-1/4 px-8 py-6">
                                    <label class="inline-block text-80 h-9 pt-2">Mail Address(From)</label>
                                    <p class="text-sm leading-normal text-80 italic"></p>
                                </div>
                                <div class="py-6 px-8 w-1/2">
                                    <input v-model="general.mail_address" placeholder="Mail Address" type="year" class="w-full form-control form-input form-input-bordered">
                                </div>
                            </div>

                            <div class="flex border-b border-40">
                                <div class="w-1/4 px-8 py-6">
                                    <label class="inline-block text-80 h-9 pt-2">Mail Name(From)</label>
                                    <p class="text-sm leading-normal text-80 italic"></p>
                                </div>
                                <div class="py-6 px-8 w-1/2">
                                    <input v-model="general.mail_name" placeholder="Mail Name" type="year" class="w-full form-control form-input form-input-bordered">
                                </div>
                            </div>

                             <div class="flex border-b border-40">
                                <div class="w-1/4 px-8 py-6">
                                    <label class="inline-block text-80 h-9 pt-2">Mail Driver</label>
                                    <p class="text-sm leading-normal text-80 italic"></p>
                                </div>
                                <div class="py-6 px-8 w-1/2">
                                    <input v-model="general.mail_driver" placeholder="Mail Driver" type="year" class="w-full form-control form-input form-input-bordered">
                                </div>
                            </div>
                            <div class="flex border-b border-40">
                                <div class="w-1/4 px-8 py-6">
                                    <label class="inline-block text-80 h-9 pt-2">Mail Host</label>
                                    <p class="text-sm leading-normal text-80 italic"></p>
                                </div>
                                <div class="py-6 px-8 w-1/2">
                                    <input v-model="general.mail_host" placeholder="Mail Host" type="year" class="w-full form-control form-input form-input-bordered">
                                </div>
                            </div>
                            <div class="flex border-b border-40">
                                <div class="w-1/4 px-8 py-6">
                                    <label class="inline-block text-80 h-9 pt-2">Mail Port</label>
                                    <p class="text-sm leading-normal text-80 italic"></p>
                                </div>
                                <div class="py-6 px-8 w-1/2">
                                    <input v-model="general.mail_port" placeholder="Mail Port" type="year" class="w-full form-control form-input form-input-bordered">
                                </div>
                            </div>

                             <div class="flex border-b border-40">
                                <div class="w-1/4 px-8 py-6">
                                    <label class="inline-block text-80 h-9 pt-2">Mail Username</label>
                                    <p class="text-sm leading-normal text-80 italic"></p>
                                </div>
                                <div class="py-6 px-8 w-1/2">
                                    <input v-model="general.mail_username" placeholder="Mail Username" type="year" class="w-full form-control form-input form-input-bordered">
                                </div>
                            </div>
                            <div class="flex border-b border-40">
                                <div class="w-1/4 px-8 py-6">
                                    <label class="inline-block text-80 h-9 pt-2">Mail Password</label>
                                    <p class="text-sm leading-normal text-80 italic"></p>
                                </div>
                                <div class="py-6 px-8 w-1/2">
                                    <input v-model="general.mail_password" placeholder="Mail Password" type="year" class="w-full form-control form-input form-input-bordered">
                                </div>
                            </div>
                            <div class="flex border-b border-40">
                                <div class="w-1/4 px-8 py-6">
                                    <label class="inline-block text-80 h-9 pt-2">Mail Encription</label>
                                    <p class="text-sm leading-normal text-80 italic"></p>
                                </div>
                                <div class="py-6 px-8 w-1/2">
                                    <input v-model="general.mail_encription" placeholder="Mail Encription" type="year" class="w-full form-control form-input form-input-bordered">
                                </div>
                            </div>

                        </div>
                        <div class="bg-30 flex px-8 py-4">
                            <button type="submit" class="ml-auto btn btn-default btn-primary mr-3">
                                Update Setting
                            </button>
                        </div>
                    </form>
                </div>
            </tab>
            <tab name="Document">

            </tab>
           
        </tabs>

    </div>
</template>

<script>

export default {
    data() {
        return {
            general: {},
            
            item:{
                image : null,
                imageUrl: null
            }
        }
    },
    mounted() {
        this.loadDefaultSetting()
    },
    methods: {

        loadDefaultSetting() {
            Nova.request().get("/nova-vendor/settings/default-setting")
                .then(response => {
                     console.log(response.data.general)
                        this.general = response.data.general
                })
                .catch(() => this.error = true)
        },

        updateSetting() {
            Nova.request().put("/nova-vendor/settings/update-setting", {general: this.general})
                .then(response => {
                        this.$toasted.success(response.data, {
                            duration : 5000,
                            // onComplete : () => window.location.reload(true)
                    })
                })
                .catch(() => this.error = true)
        },
        onChange(e) {
          const file = e.target.files[0]
          this.image = file
          this.item.imageUrl = URL.createObjectURL(file)
        }
    }
}
</script>

<style>

</style>