@extends('layouts.app')

@push('page-css')
	<!-- Select2 CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
	
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap-datetimepicker.min.css')}}">
@endpush

@push('page-header')
<div class="col-sm-12">
	<h3 class="page-title">Add Purchase</h3>
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
		<li class="breadcrumb-item active">Add Purchase</li>
	</ul>
</div>
@endpush


@section('content')
<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-body custom-edit-service">
				
				<!-- Add Medicine -->
				<form method="post" enctype="multipart/form-data" autocomplete="off" action="{{route('add-purchase')}}">
					@csrf
					<div class="service-fields mb-3">
						<div class="row">


							
							<div class="col-lg-4">
								<div class="form-group">
									<label>Ano<span class="text-danger">*</span></label>
									<input class="form-control" type="text" name="ano" >
								</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group">
									<label>Mode<span class="text-danger">*</span></label>
									<input class="form-control" type="text" name="mode" >
								</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group">
									<label>Capacidade<span class="text-danger">*</span></label>
									<input class="form-control" type="text" name="capacidade" >
								</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group">
									<label>Comprimento<span class="text-danger">*</span></label>
									<input class="form-control" type="text" name="comprimento" >
								</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group">
									<label>Largura<span class="text-danger">*</span></label>
									<input class="form-control" type="text" name="largura" >
								</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group">
									<label>Angola<span class="text-danger">*</span></label>
									<input class="form-control" type="text" name="angola" >
								</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group">
									<label>Abas<span class="text-danger">*</span></label>
									<input class="form-control" type="text" name="abas" >
								</div>
							</div>
						
						</div>
					</div>
					
					
					<div class="submit-section">
						<button class="btn btn-primary submit-btn" type="submit">Enviar</button>
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
	<script src="{{asset('assets/js/moment.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>
	<!-- Select2 JS -->
	<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
@endpush

