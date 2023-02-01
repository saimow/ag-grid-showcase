import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler.js';

import DataTable from './components/Posts/DataTable.vue'

const app = createApp({})

app.component('data-table', DataTable)

app.mount('#app')