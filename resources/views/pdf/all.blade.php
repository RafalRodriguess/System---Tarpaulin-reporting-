<style>
    *{
        padding: 0;
        margin: 0;
    }
  
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <div class="row">
      <div class="col"><h2 class="p-3">{{ !empty($users->name_em) ? $users->name_em : 'Cliente sem nome' }}</h2></div>
      <div class="w-100"></div>
      <div class="col mb-5 "><label class="w-50 float-right">{{ !empty($users->data) ? date('d/m/Y', strtotime($users->data)) : 'Sem data'; }}</label></div>
    </div>
  </div>


<div class="container">
    <div class="row">
	

        <div class="col-6 float-left" style="border: 1px solid rgba(10, 10, 10,.1)">
            <div class="col-6">
                <label><b>Nome</b></label>
                <p style="border-bottom: 1px solid #eeeeee;">{{ !empty($users->name_em) ? $users->name_em : 'Vazio'; }}</p>
            </div>
            <div class="col-6">
              
                <label><b>Email</b></label>
                <p style="border-bottom: 1px solid #eeeeee;">{{ !empty($users->email) ? $users->email : 'Vazio'; }}</p>
              
            </div>
            <div class="col-6">
            
                <label><b>CNPJ</b></label>
                <p style="border-bottom: 1px solid #eeeeee;">{{ !empty($users->cnpj) ? $users->cnpj : 'Vazio'; }}</p>
              
            </div>
            <div class="col-6">
            
                <label><b>CEP</b></label>
                <p style="border-bottom: 1px solid #eeeeee;">{{ !empty($users->cep) ? $users->cep : 'Vazio'; }}</p>
              
            </div>
            <div class="col-6">
            
                <label><b>UF</b></label>
                <p style="border-bottom: 1px solid #eeeeee;">{{ !empty($users->province) ? $users->province : 'Vazio'; }}</p>
              
            </div>
            <div class="col-6">
            
                <label><b>Cidade</b></label>
                <p style="border-bottom: 1px solid #eeeeee;">{{ !empty($users->city) ? $users->city : 'Vazio'; }}</p>
              
            </div>
            <div class="col-6">
              
                <label><b>Endereço</b></label>
                <p style="border-bottom: 1px solid #eeeeee;">{{ !empty($users->address_em) ? $users->address_em : 'Vazio'; }}</p>
              
            </div>
            <div class="col-6">
              
                <label><b>Forma de Pagamento</b></label>
                <p style="border-bottom: 1px solid #eeeeee;">{{ !empty($users->payment) ? $users->payment : 'Vazio'; }}</p>
              
            </div>

            <div class="col-6">
              
                <label><b>Valor</b></label>
                <p style="border-bottom: 1px solid #eeeeee;">{{ !empty($users->valor) ? $users->valor : 'Vazio'; }}</p>
              
            </div>

            <div class="col-6">
              
                <label><b>Observação</b></label>
                <p>{{ !empty($users->obs) ? $users->obs : 'Vazio'; }}</p>
              
            </div>
        </div>

        <div class="col-6 float-left " style="border: 1px solid rgba(10, 10, 10,.1)">
            <div class="col-6">
                <h2>Motorista</h2>
                <label><b>Nome<span class="text-danger"></span></b></label>
                <p style="border-bottom: 1px solid #eeeeee;">{{ !empty($supplier->name_mo) ? $supplier->name_mo : 'Vazio'; }}</p>
            </div>
            <div class="col-6">
                <label><b>Email<span class="text-danger"></span></b></label>
                <p style="border-bottom: 1px solid #eeeeee;">{{ !empty($supplier->email_mo) ? $supplier->email_mo : 'Vazio'; }}</p>
            </div>
        
            <div class="col-6">
                <label><b>Telefone<span class="text-danger"></span></b></label>
                <p style="border-bottom: 1px solid #eeeeee;">{{ !empty($supplier->phone) ? $supplier->phone : 'Vazio'; }}</p>
            </div>
            <div class="col-6">
                <label><b>RG<span class="text-danger"></span></b></label>
                <p style="border-bottom: 1px solid #eeeeee;">{{ !empty($supplier->rg) ? $supplier->rg : 'Vazio'; }}</p>
            </div>
            <div class="col-6">
                <label><b>CPF<span class="text-danger"></span></b></label>
                <p style="border-bottom: 1px solid #eeeeee;">{{ !empty($supplier->cpf) ? $supplier->cpf : 'Vazio'; }}</p>
            </div>
            <div class="col-6">
                <label><b>Endereço <span class="text-danger"></span></b></label>
                <p style="border-bottom: 1px solid #eeeeee;">{{ !empty($supplier->address) ? $supplier->address : 'Vazio'; }}</p>
            </div>
        </div>
        
        <div class="col-6 " style="border: 1px solid rgba(10, 10, 10,.1)">
            <h2>Caminhão</h2>
            <div class="col-6">
                <label><b>Ano<span class="text-danger"></span></b></label>
                <p style="border-bottom: 1px solid #eeeeee;">{{ !empty($purchase->ano) ? $purchase->ano : 'Vazio'; }}</p>
            </div>
        
        
            <div class="col-6">
                <label><b>Modelo<span class="text-danger"></span></b></label>
                <p style="border-bottom: 1px solid #eeeeee;">{{ !empty($purchase->mode) ? $purchase->mode : 'Vazio'; }}</p>
            </div>
        
            <div class="col-6">
                <label><b>Capacidade<span class="text-danger"></span></b></label>
                <p style="border-bottom: 1px solid #eeeeee;">{{ !empty($purchase->capacidade) ? $purchase->capacidade : 'Vazio'; }}</p>
            </div>
            <div class="col-6">
                <label><b>Comprimento<span class="text-danger"></span></b></label>
                <p style="border-bottom: 1px solid #eeeeee;">{{ !empty($purchase->comprimento) ? $purchase->comprimento : 'Vazio'; }}</p>
            </div>
            <div class="col-6">
                <label><b>Largura<span class="text-danger"></span></b></label>
                <p style="border-bottom: 1px solid #eeeeee;">{{ !empty($purchase->largura) ? $purchase->largura : 'Vazio'; }}</p>
            </div>
            <div class="col-6">
                <label><b>Angola<span class="text-danger"></span></b></label>
                <p style="border-bottom: 1px solid #eeeeee;">{{ !empty($purchase->angola) ? $purchase->angola : 'Vazio'; }}</p>
            </div>
        
            <div class="col-6">
                <label><b>Abas<span class="text-danger"></span></b></label>
                <p style="border-bottom: 1px solid #eeeeee;">{{ !empty($purchase->abas) ? $purchase->abas : 'Vazio'; }}</p>
            </div>
    
        </div>

    <div class="col-5 float-right " style="border: 1px solid rgba(10, 10, 10,.1); margin-top: -350px">

        <h2>Ordem de Seviço</h2>

        <div class="col-6">
            <label><b>Placa 1</b></label>
            <p style="border-bottom: 1px solid #eeeeee;">{{ !empty($sales->service_order) ? $sales->service_order : 'Vazio'; }}</p>
        </div>

        <div class="col-6">
            <label><b>Placa 2</b></label>
            <p style="border-bottom: 1px solid #eeeeee;">{{ !empty($sales->service_order_t) ? $sales->service_order_t : 'Vazio'; }}</p>
        </div>
    
        <h4>Modelo da Caçanba</h4>

        <div class="col-6">
            <label><b>Caçanba</b></label>
            <p style="border-bottom: 1px solid #eeeeee;">{{ !empty($sales->bucket_model) ? $sales->bucket_model : 'Vazio'; }}</p>
        </div>

        <div class="col-6">
            <label><b>Rodo Caçanba</b></label>
            <p style="border-bottom: 1px solid #eeeeee;">{{ !empty($sales->bucket_model_t) ? $sales->bucket_model_t : 'Vazio'; }}</p>
        </div>

        <div class="col-6">
            <label><b>LS</b></label>
            <p style="border-bottom: 1px solid #eeeeee;">{{ !empty($sales->bucket_model_d) ? $sales->bucket_model_d : 'Vazio'; }}</p>
        </div>

        <h4>Medidas</h4>
        <div class="col-6">
            <label><b>Caçamba 1</b></label>
            <p style="border-bottom: 1px solid #eeeeee;">{{ !empty($sales->measurements) ? $sales->measurements : 'Vazio'; }}</p>
        </div>
    
        <div class="col-6">
            <label><b>Caçamba 2</b></label>
            <p style="border-bottom: 1px solid #eeeeee;">{{ !empty($sales->measurements_t) ? $sales->measurements_t : 'Vazio'; }}</p>
        </div>
   
        <h4>Manivela Caçanba Frente</h4>
        <div class="col-6">
            <label><b>Frente</b></label>
            <p style="border-bottom: 1px solid #eeeeee;">{{ !empty($sales->front_bucket_crank) ? $sales->front_bucket_crank : 'Vazio'; }}</p>
        </div>
    
        <div class="col-6">
            <label><b>Atrás</b></label>
            <p style="border-bottom: 1px solid #eeeeee;">{{ !empty($sales->front_bucket_crank_t) ? $sales->front_bucket_crank_t : 'Vazio'; }}</p>
        </div>
    

        <h4>Manivela Caçanba Atrás</h4>
        <div class="col-6">
            <label><b>Frente</b></label>
            <p style="border-bottom: 1px solid #eeeeee;">{{ !empty($sales->rear_bucket_crank) ? $sales->rear_bucket_crank : 'Vazio'; }}</p>
        </div>
    
        <div class="col-6">
            <label><b>Atrás</b></label>
            <p style="border-bottom: 1px solid #eeeeee;">{{ !empty($sales->rear_bucket_crank_t) ? $sales->rear_bucket_crank_t : 'Vazio'; }}</p>
        </div>
    
    </div>
</div>

</div>
</div>

<p style="right: 40%;bottom:0; position: absolute;" class="text-center">Lona Mais Fácil Tubarão</p>