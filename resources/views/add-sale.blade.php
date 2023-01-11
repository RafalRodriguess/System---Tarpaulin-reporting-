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
			<form method="post" enctype="multipart/form-data" action="{{route('add-categorie')}}">
				@csrf
				
				<div class="service-fields mb-3">
					<div class="row">
						<div class="col-lg-6">
							<h5>Ordem de Seviço</h5>
							<div class="form-group">
								<label>Placa 1</label>
								<input class="form-control" type="text" name="service_order">
							</div>
						
                            <div class="form-group">
                                <label>Placa 2</label>
                                <input class="form-control" type="text" name="service_order_t" >
                            </div>
                        </div>

						<div class="col-lg-6">
							<h5>Modelo da Caçanba</h5>
						
                            <div class="form-group">
                                <label>Caçanba</label>
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

						<div class="col-lg-6">
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

						<div class="col-lg-6">
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

						<div class="col-lg-6">
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
	<!-- Select2 JS -->
	<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
	<!-- Datetimepicker JS -->
	<script src="{{asset('assets/js/moment.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>	
@endpush

