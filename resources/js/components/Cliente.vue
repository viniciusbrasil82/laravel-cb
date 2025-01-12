<template>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 col-md-6 offset-md-3">
                <div class="card shadow sm">
                    <div class="card-body">
                        <h1 class="text-center">Busca Clientes</h1>
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
                                <label for="nome" class="font-weight-bold">Nome</label>
                                <input type="text" name="nome" v-model="cliente.name" id="nome" placeholder="Nome" class="form-control">
                            </div>
                            <div class="form-group col-6 my-2">
                                <label for="status" class="font-weight-bold">Status</label>
                                <input type="text" name="status" v-model="cliente.status" id="status" placeholder="Situação" class="form-control">
                            </div>
                            <div class="form-group col-6 my-2">
                                <label for="documento" class="font-weight-bold">Documento</label>
                                <input type="text" name="documento" v-model="cliente.documento" id="documento" placeholder="Documento" class="form-control">
                            </div>
                            <div class="col-12 mb-2">
                                <button type="submit" :disabled="processing" class="btn btn-primary btn-block">
                                    {{ processing ? "Aguarde" : "Buscar" }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div>
                    
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Status</th>
                            <th scope="col">Documento</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            </tr>

                        </tbody>
                    </table>                    
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { mapActions } from 'vuex'
export default {
    name:'cliente',
    data(){
        return {
            cliente:{
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
            await axios.post('/register',this.cliente).then(response=>{
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
        },
        listaClientes()
        {
           let clientes = axios.get('/clientes'); 
        }

    }, mounted(){
            ///alert('montou');
    }
}
</script>