<template>
    <div class="">
        <ag-grid-vue
            class="ag-theme-alpine"
            style="height: 500px"
            :columnDefs="columnDefs"
            :rowData="rowData"
            :pagination="true"
            :paginationPageSize=10
        ></ag-grid-vue>
    </div>
</template>

<script>
import {AgGridVue} from 'ag-grid-vue3'

import "ag-grid-community/styles/ag-grid.css";
import "ag-grid-community/styles/ag-theme-alpine.css";
import axios from 'axios';

    export default {
        mounted(){
            axios.get('/api/posts/data')
                .then(response => {
                    this.rowData = response.data.data
                })
                .catch(error => {
                    console.log(error)
                })
        },
        data(){
            return{
                columnDefs:[
                    {field: 'id', sortable: true, filter: true},
                    {field: 'title', sortable: true, filter: true},
                    {field: 'content', sortable: true, filter: true},
                ],
                rowData:[]
            }
        },
        methods:{
            
        },
        components:{
            AgGridVue
        }
    }
</script>

<style scoped>

</style>