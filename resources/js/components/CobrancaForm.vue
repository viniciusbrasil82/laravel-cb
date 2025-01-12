<template>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 col-md-6 offset-md-3">
                <div class="card shadow sm">
                    <div class="card-body">
                        <h1 class="text-center">Register</h1>
                        <hr/>
                        <form action="javascript:void(0)" @submit="register" class="row" method="post">
                            <div class="col-12" v-if="Object.keys(validationErrors).length > 0">
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        <li v-for="(value, key) in validationErrors" :key="key">{{ value[0] }}</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="form-group col-12">
                                <label for="cliente_id" class="font-weight-bold">Cliente ID</label>
                                <input type="text" name="cliente_id" v-model="cobranca.cliente_id" id="cliente_id" placeholder="Cliente ID" class="form-control">
                            </div>
                            <div class="form-group col-12 my-2">
                                <label for="contrato_id" class="font-weight-bold">Contrato ID</label>
                                <input type="text" name="contrato_id" v-model="cobranca.contrato_id" id="contrato_id" placeholder="Contrato ID" class="form-control">
                            </div>
                            <div class="form-group col-12 my-2">
                                <label for="valor" class="font-weight-bold">Contrato ID</label>
                                <input type="text" name="valor" v-model="cobranca.valor" id="valor" placeholder="Valor" class="form-control">
                            </div>
                            <div class="form-group col-12 my-2">
                                <label for="multa" class="font-weight-bold">Contrato ID</label>
                                <input type="text" name="multa" v-model="cobranca.multa" id="multa" placeholder="Multa" class="form-control">
                            </div>
                            <div class="form-group col-12 my-2">
                                <label for="status" class="font-weight-bold">Contrato ID</label>
                                <input type="text" name="status" v-model="cobranca.status" id="status" placeholder="Status" class="form-control">
                            </div>                                                                                    

                            <div class="col-12 mb-2">
                                <button type="submit" :disabled="processing" class="btn btn-primary btn-block">
                                    {{ processing ? "Aguarde" : "Salvar" }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { mapActions } from 'vuex'
export default {
    name:'cobranca',
    data(){
        return {
            cobranca:{
                name:"",
                email:"",
                password:"",
                password_confirmation:""
            },
            validationErrors:{},
            processing:false
        }
    },
    methods:{
        ...mapActions({
            signIn:'auth/login'
        }),
        async register(){
            this.processing = true
            await axios.get('/sanctum/csrf-cookie')
            await axios.post('/register',this.cobranca).then(response=>{
                this.validationErrors = {}
                this.signIn()
            }).catch(({response})=>{
                if(response.status===422){
                    this.validationErrors = response.data.errors
                }else{
                    this.validationErrors = {}
                    alert(response.data.message)
                }
            }).finally(()=>{
                this.processing = false
            })
        }
    }
}
</script>