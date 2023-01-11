@extends('layouts.app')

@push('page-css')
	<!-- Select2 CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
	<!-- Datetimepicker CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap-datetimepicker.min.css')}}">
@endpush

@push('page-header')
<div class="col-sm-12">
	<h3 class="page-title">Adicionar Motorista</h3>
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
		<li class="breadcrumb-item active">Adicionar Motorista</li>
	</ul>
</div>
@endpush

@section('content')
<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-body custom-edit-service">
				
		
			<!-- Add Medicine -->
			<form method="post" enctype="multipart/form-data" action="{{route('categorie-product')}}">
				@csrf
                
				
				<div class="service-fields mb-3">
                    <div class="row">
					        <div class="col-md-6 p-3" style="border: 1px solid rgba(10, 10, 10,.1)">
                                <div class="col-lg-12">
                                    <h2>Empresa</h2>
                                    <div class="form-group">
                                        <label>Nome</label>
                                        <input type="text" name="name_em" class="form-control edit_name" placeholder="John Doe">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control edit_email"  id="email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>CNPJ</label>
                                        <input type="text" name="cnpj" class="form-control edit_cnpj"  id="cnpj">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>CEP</label>
                                        <input type="text" name="cep"  class="form-control edit_cep"  id="cep">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>UF</label>
                                        <input type="text" name="province" class="form-control edit_province"  id="province">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Cidade</label>
                                        <input type="text" name="city" class="form-control edit_city"  id="city">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Endereço</label>
                                        <input type="text" name="address_em" class="form-control edit_address_em"  id="address_em">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Forma de Pagamento</label>

                                        <select  name="payment" id="payment" class="form-control edit_payment">
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
                                        <input type="text" name="valor" class="form-control edit_valor"  id="valor">
                                    </div>
                                </div>


                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Observação</label>
                                        <textarea name="obs" class="form-control edit_obs"  id="obs"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 p-3" style="border: 1px solid rgba(10, 10, 10,.1)">
                                <div class="col-lg-12">
                                    <h2>Motorista</h2>
                                    <div class="form-group">
                                        <label>Nome<span class="text-danger"></span></label>
                                        <input class="form-control" type="text" name="name_mo">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label>Email<span class="text-danger"></span></label>
                                    <input class="form-control" type="text" name="email_mo" id="email_mo">
                                </div>
                            
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Telefone<span class="text-danger"></span></label>
                                        <input class="form-control" type="text" name="phone">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label>RG<span class="text-danger"></span></label>
                                    <input class="form-control" type="text" name="rg">
                                </div>
                                <div class="col-lg-12">
                                    <label>CPF<span class="text-danger"></span></label>
                                    <input class="form-control" type="text" name="cpf">
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Endereço <span class="text-danger"></span></label>
                                        <input type="text" name="address" class="form-control">
                                    </div>
                                </div>
                            </div>
                          
                            <div class="col-md-6 p-3" style="border: 1px solid rgba(10, 10, 10,.1)">
                                <div class="col-lg-12">
                                    <h2>Caminhão</h2>
                                    <div class="form-group">
                                        <label>Ano<span class="text-danger"></span></label>
                                        <input class="form-control" type="text" name="ano" >
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Modelo<span class="text-danger"></span></label>
                                        <input class="form-control" type="text" name="mode" >
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Capacidade<span class="text-danger"></span></label>
                                        <input class="form-control" type="text" name="capacidade" >
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Comprimento<span class="text-danger"></span></label>
                                        <input class="form-control" type="text" name="comprimento" >
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Largura<span class="text-danger"></span></label>
                                        <input class="form-control" type="text" name="largura" >
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Argola<span class="text-danger"></span></label>
                                        <input class="form-control" type="text" name="angola" >
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Abas<span class="text-danger"></span></label>
                                        <input class="form-control" type="text" name="abas" >
                                    </div>
                                </div>
						
						    </div>
					
                    <div class="col-md-6 p-3" style="border: 1px solid rgba(10, 10, 10,.1)">
						<div class="col-lg-12">
							<h2>Ordem de Seviço</h2>
                            <div class="form-group">
                                <label>Data</label>
                                <input type="date" value="<?php echo date('d/m/Y') ?>" name="data" class="form-control edit_data"  id="data">
                            </div>
							<div class="form-group">
								<label>Placa 1</label>
								<input class="form-control" type="text" name="service_order">
							</div>
						
                            <div class="form-group">
                                <label>Placa 2</label>
                                <input class="form-control" type="text" name="service_order_t" >
                            </div>
                        </div>

						<div class="col-lg-12">
							<h5>Modelo da Caçanba</h5>
						
                            <div class="form-group">
                                <label>Bicaçamba</label>
                                <input class="form-control" type="text" name="bucket_model" >
                            </div>

							<div class="form-group">
                                <label>Rodo Caçanba</label>
                                <input class="form-control" type="text" name="bucket_model_t" >
                            </div>

							<div class="form-group">
                                <label>LS</label>
                                <input class="form-control" type="text" name="bucket_model_d" >
                            </div>
                        </div>

						<div class="col-lg-12">
							<h5>Medidas</h5>
							<div class="form-group">
								<label>Caçamba 1</label>
								<input class="form-control" type="text" name="measurements">
							</div>
						
                            <div class="form-group">
                                <label>Caçamba 2</label>
                                <input class="form-control" type="text" name="measurements_t" >
                            </div>
                        </div>

						<div class="col-lg-12">
							<h5>Manivela Caçanba Frente</h5>
							<div class="form-group">
								<label>Frente</label>
								<input class="form-control" type="text" name="front_bucket_crank">
							</div>
						
                            <div class="form-group">
                                <label>Atrás</label>
                                <input class="form-control" type="text" name="front_bucket_crank_t" >
                            </div>
                        </div>

						<div class="col-lg-12">
							<h5>Manivela Caçanba Atrás</h5>
							<div class="form-group">
								<label>Frente</label>
								<input class="form-control" type="text" name="rear_bucket_crank">
							</div>
						
                            <div class="form-group">
                                <label>Atrás</label>
                                <input class="form-control" type="text" name="rear_bucket_crank_t" >
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
</div>
@endsection	

@push('page-js')
	<!-- Select2 JS -->
	{{-- <script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
	<!-- Datetimepicker JS -->
	<script src="{{asset('assets/js/moment.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>	 --}}

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
        </script>
@endpush

