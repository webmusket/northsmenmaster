import axios from 'axios'
import VueAxios from 'vue-axios'
Nova.booting((Vue, router, store) => {
	Vue.config.devtools = true
	Vue.use(VueAxios, axios)
	
  Vue.component('index-super-category', require('./components/IndexField'))
  Vue.component('detail-super-category', require('./components/DetailField'))
  Vue.component('form-super-category', require('./components/FormField'))
})
