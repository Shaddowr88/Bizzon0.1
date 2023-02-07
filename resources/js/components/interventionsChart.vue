<template>
    <div >
        <bar-chart :chart-data="datacollection" :height="300"></bar-chart>
    </div>
</template>

<script>

    import barInterv from './blocChartIntervention'
    export default {
        components: {
            barInterv
        },
        data(){
            return {
                datacollection: null
            }
        },
        mounted () {
            this.fillData()
        },
        methods: {

            fillData ()
            {
                this.datacollection = {
                    labels: ['','','','',''],
                    datasets: [
                        {
                            label: 'autres',
                            backgroundColor: '#0aeefJ',
                            data: [ 20, 40, 50, 40, 50]
                        },
                    ]
                }
            }
        }
    }
</script>

<style lang="css">
    .small {
        max-width: 800px;
        /*!* max-height: 500px; *!*/
        margin:  50px auto;
    }
</style>
