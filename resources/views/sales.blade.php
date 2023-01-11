@extends('layouts.app')

@push('page-css')
	<!-- Select2 css-->
	<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
@endpush

@push('page-header')
<div class="col-sm-7 col-auto">
	<h3 class="page-title">Ordem de serviço</h3>
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
		<li class="breadcrumb-item active">Ordem de serviço</li>
	</ul>
</div>
@can('create-sales')
<div class="col-sm-5 col">
	<a href="{{route('add-sale')}}" class="btn btn-primary float-right mt-2">Adicionar OS</a>
</div>
@endcan
@endpush

@section('content')
<div class="row">
	<div class="col-md-12">
	
		<!-- Recent Sales -->
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table id="datatable-export" class="table table-hover table-center mb-0">
						<thead>
							<tr>
								<th>Ordem de Serviço</th>
								<th>Modelo da Caçanba</th>
								<th>Medidas</th>
								<th class="action-btn">Ações</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($sales as $sale)
								<tr>
									<td>{{$sale->service_order}}</td>
									<td>{{$sale->bucket_model}}</td>
									<td>{{$sale->measurements}}</td>
									<td>
										<div class="actions">
											<a class="btn btn-sm bg-success-light" href="{{route('edit-sale',$sale)}}">
												<i class="fe fe-pencil"></i> Editar
											</a>
											<a data-id="{{$sale->id}}" href="javascript:void(0);" class="btn btn-sm bg-danger-light deletebtn" data-toggle="modal">
												<i class="fe fe-trash"></i> Apagar
											</a>
										</div>
									</td>
								</tr>
								
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- /Recent sales -->
		
	</div>
</div>

@endsection


@push('page-js')
	<!-- Select2 js-->
	<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
	<script>
		$(document).ready(function(){
			$('#datatable-export').on('click','.editbtn',function (){
				event.preventDefault();
				jQuery.noConflict();
				$('#edit_sale').modal('show');
				var id = $(this).data('id');
				var product = $(this).data('product');
				var quantity = $(this).data('quantity');
				$('#edit_id').val(id);
				$('.edit_product').val(product);
				$('.edit_quantity').val(quantity);
				
			});
		});
	</script>
@endpush
