<template>
    <div >
        <bar-chart :chart-data="datacollection" :height="300"></bar-chart>
    </div>
</template>

<script>

    import barChart from './blocChartIntervention'

    export default {
        components: {
            barChart
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
                            backgroundColor: '#FF0068',
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