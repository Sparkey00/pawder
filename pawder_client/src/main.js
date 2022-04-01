import { createApp } from 'vue'
import { createPinia } from 'pinia'
import axios from 'axios'
import VueAxios from 'vue-axios'

import App from './App.vue'
import router from './router'

const app = createApp(App)

axios.defaults.baseURL = 'http://pawder.api'
app.use(createPinia())
app.use(router)
app.use(VueAxios, axios)

app.mount('#app')
