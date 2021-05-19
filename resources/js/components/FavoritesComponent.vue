<template>
    <!-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div>
        <button v-if="show" @click.prevent="unsave()" style="width: 100%" class="btn btn-dark">Unsave Job</button>
        <button v-else @click.prevent="save()" style="width: 100%" class="btn btn-success">Save Job</button>
    </div>
</template>

<script>
    export default {
        props:['jobid','faborited'],

        data() {
            return{
                show:true
            }
        },
        
        mounted() {
            this.show = this.jobFavorited ? true:false
        },

        computed:{
            jobFavorited(){
                this.faborited
            }
        },

        methods: {
            save(){
                axios.post('/save/'+this.jobid)
                    .then(response=>this.show=true)
                    .catch(error=>alert('Error'))
                // alert('ok');
            },
            unsave(){
                axios.post('/unsave/'+this.jobid)
                    .then(response=>this.show=false)
                    .catch(error=>alert('Error'))
            },
        }
    }
</script>
