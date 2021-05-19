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
        <form @submit="formSubmit">
            <button v-if="show" style="width: 100%" class="btn btn-warning">Apply</button>
            <div v-else class="alert alert-success">
                Job Applied Successfully
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        props:['jobid'],
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return{
                show:true
            }
        },
        methods: {
            formSubmit(e){
                e.preventDefault();
                axios.post(/applications/+this.jobid, {

                }).then((response)=>{
                    this.show=false
                });
            }
        }
    }
</script>
