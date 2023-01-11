@extends('layouts.app')

@push('page-css')
	<!-- Select2 CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
	<!-- Datetimepicker CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap-datetimepicker.min.css')}}">
@endpush

@push('page-header')
<div class="col-sm-6">
	<h3 class="page-title">Adicionar Lauso</h3>
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Controle</a></li>
		<li class="breadcrumb-item active">Adicionar Laudo</li>
	</ul>
</div>
<div class="col-sm-6">
    <a class="btn btn-primary" href="{{url('pdf', $categorie->id)}}">Imprimir</a>
</div>
@endpush

@section('content')
<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-body custom-edit-service">
				
		
			<!-- Add Medicine -->
			<form method="post" enctype="multipart/form-data" action="{{url('categorie', $categorie->id)}}">
				@csrf
				@method("PUT")
				<div class="service-fields mb-3">
                    <div class="row">
                        <input type="hidden" name="id" value="{{ $categorie->id }}">

					        <div class="col-md-6 p-3" style="border: 1px solid rgba(10, 10, 10,.1)">
                                <div class="col-lg-12">
                                    <h2>Empresa</h2>
                                    <div class="form-group">
                                        <label>Nome</label>
                                        <input type="text" name="name_em" value="{{ $users->name_em }}" class="form-control edit_name" placeholder="Nome e Sobrenome">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email"value="{{ $users->email }}" class="form-control edit_email"  id="email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>CNPJ</label>
                                        <input type="text" name="cnpj" value="{{ $users->cnpj }}" class="form-control edit_cnpj"  id="cnpj">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>CEP</label>
                                        <input type="text" name="cep" value="{{ $users->cep }}" class="form-control edit_cep"  id="cep">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>UF</label>
                                        <input type="text" name="province" value="{{ $users->province }}" class="form-control edit_province"  id="province">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Cidade</label>
                                        <input type="text" name="city" value="{{ $users->city }}" class="form-control edit_city"  id="city">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Endereço</label>
                                        <input type="text" name="address_em" value="{{ $users->address_em }}" class="form-control edit_address_em"  id="address_em">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Forma de Pagamento</label>

                                        <select  name="payment" id="payment" class="form-control edit_payment">
                                            <option value="{{ $users->payment }}">{{ $users->payment }}</option>
                                            <option value="Dinheiro">Dinheiro</option>
                                            <option value="Pix">Pix</option>
                                            <option value="Boleto">Boleto</option>
                                            <option value="Cartão débito/crédito">Cartão débito/crédito</option>
                                            <option value="Transferência">Transferência</option>                                            
                                            <option value="Cheque">Cheque</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Valor</label>
                                        <input type="text" name="valor" value="{{ $users->valor }}" class="form-control edit_valor"  id="valor">
                                    </div>
                                </div>


                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Observação</label>
                                        <textarea name="obs" class="form-control edit_obs"  id="obs">{{ $users->obs }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 p-3" style="border: 1px solid rgba(10, 10, 10,.1)">
                                <div class="col-lg-12">
                                    <h2>Motorista</h2>
                                    <div class="form-group">
                                        <label>Nome<span class="text-danger"></span></label>
                                        <input class="form-control" type="text" name="name_mo" value="{{ $supplier->name_mo }}">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label>Email<span class="text-danger"></span></label>
                                    <input class="form-control" type="text" name="email_mo" value="{{ $supplier->email_mo }}" id="email_mo">
                                </div>
                            
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Telefone<span class="text-danger"></span></label>
                                        <input class="form-control" type="text" name="phone" value="{{ $supplier->phone }}">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label>RG<span class="text-danger"></span></label>
                                    <input class="form-control" type="text" name="rg" value="{{ $supplier->rg }}">
                                </div>
                                <div class="col-lg-12">
                                    <label>CPF<span class="text-danger"></span></label>
                                    <input class="form-control" type="text" name="cpf" value="{{ $supplier->cpf }}">
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Endereço <span class="text-danger"></span></label>
                                        <input type="text" name="address" value="{{ $supplier->address }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                          
                            <div class="col-md-6 p-3" style="border: 1px solid rgba(10, 10, 10,.1)">
                                <div class="col-lg-12">
                                    <h2>Caminhão</h2>
                                    <div class="form-group">
                                        <label>Ano<span class="text-danger"></span></label>
                                        <input class="form-control" type="text" name="ano" value="{{ $purchase->ano }}" >
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Modelo<span class="text-danger"></span></label>
                                        <input class="form-control" type="text" name="mode" value="{{ $purchase->mode }}" >
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Capacidade<span class="text-danger"></span></label>
                                        <input class="form-control" type="text" name="capacidade" value="{{ $purchase->capacidade }}" >
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Comprimento<span class="text-danger"></span></label>
                                        <input class="form-control" type="text" name="comprimento" value="{{ $purchase->comprimento }}" >
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Largura<span class="text-danger"></span></label>
                                        <input class="form-control" type="text" name="largura" value="{{ $purchase->largura }}" >
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Argola<span class="text-danger"></span></label>
                                        <input class="form-control" type="text" name="angola" value="{{ $purchase->angola }}" >
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Abas<span class="text-danger"></span></label>
                                        <input class="form-control" type="text" name="abas" value="{{ $purchase->abas }}" >
                                    </div>
                                </div>
						
						    </div>
					
                    <div class="col-md-6 p-3" style="border: 1px solid rgba(10, 10, 10,.1)">
						<div class="col-lg-12">
							<h2>Ordem de Seviço</h2>

                            <div class="form-group">
                                <label>Data</label>
                                <input type="date" name="data" value="{{ $users->data }}" class="form-control edit_data"  id="data">
                            </div>
							<div class="form-group">
								<label>Placa 1</label>
								<input class="form-control" type="text" name="service_order" value="{{ $sales->service_order }}">
							</div>
						
                            <div class="form-group">
                                <label>Placa 2</label>
                                <input class="form-control" type="text" name="service_order_t" value="{{ $sales->service_order_t }}" >
                            </div>
                        </div>

						<div class="col-lg-12">
							<h5>Modelo da Caçanba</h5>
						
                            <div class="form-group">
                                <label>Bicaçamba</label>
                                <input class="form-control" type="text" name="bucket_model" value="{{ $sales->bucket_model }}" >
                            </div>

							<div class="form-group">
                                <label>Rodo Caçanba</label>
                                <input class="form-control" type="text" name="bucket_model_t" value="{{ $sales->bucket_model_t }}" >
                            </div>

							<div class="form-group">
                                <label>LS</label>
                                <input class="form-control" type="text" name="bucket_model_d" value="{{ $sales->bucket_model_d }}" >
                            </div>
                        </div>

						<div class="col-lg-12">
							<h5>Medidas</h5>
							<div class="form-group">
								<label>Caçamba 1</label>
								<input class="form-control" type="text" name="measurements" value="{{ $sales->measurements }}">
							</div>
						
                            <div class="form-group">
                                <label>Caçamba 2</label>
                                <input class="form-control" type="text" name="measurements_t" value="{{ $sales->measurements_t }}" >
                            </div>
                        </div>

						<div class="col-lg-12">
							<h5>Manivela Caçanba Frente</h5>
							<div class="form-group">
								<label>Frente</label>
								<input class="form-control" type="text" name="front_bucket_crank" value="{{ $sales->front_bucket_crank }}">
							</div>
						
                            <div class="form-group">
                                <label>Atrás</label>
                                <input class="form-control" type="text" name="front_bucket_crank_t" value="{{ $sales->front_bucket_crank_t }}" >
                            </div>
                        </div>

						<div class="col-lg-12">
							<h5>Manivela Caçanba Atrás</h5>
							<div class="form-group">
								<label>Frente</label>
								<input class="form-control" type="text" name="rear_bucket_crank" value="{{ $sales->rear_bucket_crank }}">
							</div>
						
                            <div class="form-group">
                                <label>Atrás</label>
                                <input class="form-control" type="text" name="rear_bucket_crank_t" value="{{ $sales->rear_bucket_crank_t }}" >
                            </div>
                        </div>
					</div>
				</div>
            </div>

				
				<div class="submit-section">
					<button class="btn btn-primary submit-btn" type="submit" name="form_submit" value="submit">Enviar</button>
				</div>
			</form>
			<!-- /Add Medicine -->


			</div>
		</div>
	</div>			
</div>
@endsection	

@push('page-js')
	<!-- Datetimepicker JS -->
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
	<!-- Select2 JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
    
    $(function(){

$("body").click(function(){

  //Nova variável "cep" somente com dígitos.
  var cep = $("#cep").val().replace(/\D/g, '');

  //Verifica se campo cep possui valor informado.
  if (cep != "") {

      //Expressão regular para validar o CEP.
      var validacep = /^[0-9]{8}$/;

      //Valida o formato do CEP.
      if(validacep.test(cep)) {

       //Consulta o webservice viacep.com.br/
      $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

              if (!("erro" in dados)) {
                  //Atualiza os campos com os valores da consulta.
                //   $("#rua").val(dados.logradouro);
                  $("#address").val(dados.bairro+', '+dados.logradouro);
                  $("#city").val(dados.localidade);
                  $("#province").val(dados.uf);
              } //end if.
              else {
                  //CEP pesquisado não foi encontrado.
                  console.log("CEP não encontrado.");
              }
          });
      } //end if.
      else {
          console.log("Formato de CEP inválido.");
      }
  } //end if.
});
});


//cpf



function validarCPF(cpf) {	
	cpf = cpf.replace(/[^\d]+/g,'');	
	if(cpf == '') return false;	
	// Elimina CPFs invalidos conhecidos	
	if (cpf.length != 11 || 
		cpf == "00000000000" || 
		cpf == "11111111111" || 
		cpf == "22222222222" || 
		cpf == "33333333333" || 
		cpf == "44444444444" || 
		cpf == "55555555555" || 
		cpf == "66666666666" || 
		cpf == "77777777777" || 
		cpf == "88888888888" || 
		cpf == "99999999999")
			return false;		
	// Valida 1o digito	
	add = 0;	
	for (i=0; i < 9; i ++)		
		add += parseInt(cpf.charAt(i))  (10 - i);	
		rev = 11 - (add % 11);	
		if (rev == 10 || rev == 11)		
			rev = 0;	
		if (rev != parseInt(cpf.charAt(9)))		
			return false;		
	// Valida 2o digito	
	add = 0;	
	for (i = 0; i < 10; i ++)		
		add += parseInt(cpf.charAt(i))  (11 - i);	
	rev = 11 - (add % 11);	
	if (rev == 10 || rev == 11)	
		rev = 0;	
	if (rev != parseInt(cpf.charAt(10)))
		return false;		
	return true;   
}


$('body').onclick(function() {

    let cpf = $('#cpf').val();
    validarCPF(cpf); 
});
        </script>
@endpush

