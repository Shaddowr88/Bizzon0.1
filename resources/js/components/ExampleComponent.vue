<template>
    <div >
        <h2>Budget Co-pro </h2>
        <line-chart :chart-data="datacollection" :height="150"></line-chart>
    </div>
</template>

<script>

    import LineChart from './LineChart.js'

    export default {
        components: {
            LineChart
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
                    labels: ['month'],
                    datasets: [
                        {
                            label: 'Charge',
                            backgroundColor: 'rgba(10,7,255,0.55)',
                            data: [ 'budgetCountData']
                        },

                        {
                            label: 'depense',
                            backgroundColor: 'rgba(255,0,102,0.55)',
                            data: [ 5000, 2000, 3000, 4000, 3000, 2000, 5000]
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
        max-height: 500px;
        margin:  50px auto;

    }
</style>
