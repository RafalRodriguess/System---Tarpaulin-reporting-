@extends('layouts.app')

@push('page-css')
	<!-- Select2 CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
	<!-- Datetimepicker CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap-datetimepicker.min.css')}}">
@endpush

@push('page-header')
<div class="col-sm-12">
	<h3 class="page-title">Adicionar OS</h3>
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Controle</a></li>
		<li class="breadcrumb-item active">Adicionar OS</li>
	</ul>
</div>
@endpush

@section('content')
<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-body custom-edit-service">
				
		
			<!-- Add Medicine -->
			<form method="post" enctype="multipart/form-data" action="{{route('edit-product',$sales)}}">
				@csrf
				
				<div class="service-fields mb-3">
					<div class="row">
						<div class="col-lg-6">
							<h5>Ordem de Seviço</h5>
							<div class="form-group">
								<label>Placa 1</label>
								<input class="form-control" type="text" value="{{ $sales->service_order}}" name="service_order">
							</div>
						
                            <div class="form-group">
                                <label>Placa 2</label>
                                <input class="form-control" type="text" value="{{ $sales->service_order_t}}" name="service_order_t" >
                            </div>
                        </div>

						<div class="col-lg-6">
							<h5>Modelo da Caçanba</h5>
						
                            <div class="form-group">
                                <label>Caçanba</label>
                                <input class="form-control" type="text" value="{{ $sales->bucket_model}}" name="bucket_model" >
                            </div>

							<div class="form-group">
                                <label>Rodo Caçanba</label>
                                <input class="form-control" type="text" value="{{ $sales->bucket_model_t}}" name="bucket_model_t" >
                            </div>

							<div class="form-group">
                                <label>LS</label>
                                <input class="form-control" type="text" value="{{ $sales->bucket_model_d}}" name="bucket_model_d" >
                            </div>
                        </div>

						<div class="col-lg-6">
							<h5>Medidas</h5>
							<div class="form-group">
								<label>Caçamba 1</label>
								<input class="form-control" type="text" value="{{ $sales->measurements}}" name="measurements">
							</div>
						
                            <div class="form-group">
                                <label>Caçamba 2</label>
                                <input class="form-control" type="text" value="{{ $sales->measurements_t}}" name="measurements_t" >
                            </div>
                        </div>

						<div class="col-lg-6">
							<h5>Manivela Caçanba Frente</h5>
							<div class="form-group">
								<label>Frente</label>
								<input class="form-control" type="text" value="{{ $sales->front_bucket_crank}}" name="front_bucket_crank">
							</div>
						
                            <div class="form-group">
                                <label>Atrás</label>
                                <input class="form-control" type="text" value="{{ $sales->front_bucket_crank_t}}" name="front_bucket_crank_t" >
                            </div>
                        </div>

						<div class="col-lg-6">
							<h5>Manivela Caçanba Atrás</h5>
							<div class="form-group">
								<label>Frente</label>
								<input class="form-control" type="text" value="{{ $sales->rear_bucket_crank}}" name="rear_bucket_crank">
							</div>
						
                            <div class="form-group">
                                <label>Atrás</label>
                                <input class="form-control" type="text" value="{{ $sales->rear_bucket_crank_t}}" name="rear_bucket_crank_t" >
                            </div>
                        </div>
					</div>
				</div>

			
				<div class="submit-section">
					<button class="btn btn-primary submit-btn" type="submit" name="form_submit" value="submit">Mudar</button>
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
	<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
@endpush

