@extends('layouts.app')

@php

use App\Notifications\StockAlert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
@endphp
@push('page-css')
	<!-- Select2 CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
@endpush

@push('page-header')
<div class="col-sm-7 col-auto">
	<h3 class="page-title">Laudos</h3>
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
		<li class="breadcrumb-item active">Laudos</li>
	</ul>
</div>
<div class="col-sm-5 col">
	<a href="{{url('categorie/create')}}"  class="btn btn-primary float-right mt-2">Adicionar Laudo</a>
</div>

@endpush

@section('content')

<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table id="category-table" class="datatable table table-striped table-bordered table-hover table-center mb-0">
						<thead>
							<tr style="boder:1px solid black;">
								<th>Número</th>
								<th>Empresa</th>
								<th>CNPJ</th>
								<th>Data</th>
								<th>Motorista</th>
								<th class="text-center action-btn">Ações</th>
							</tr>
						</thead>
						<tbody>
							
							@php 
							
								
								foreach($categories as $category){

									$users = DB::table('users')->where('id', $category->empresa)->first();

									$moto = DB::table('suppliers')->where('id', $category->motorista)->first();

									echo '	<tr>	
												<td>'
													.$category->id.
												'</td>						
												<td>'
													.$users->name_em.
												'</td>	
												<td>'
													.$users->cnpj.
												'</td>	
												<td>'
													.$users->data.
												'</td>				
												<td>'
													.$moto->name_mo.
												'</td>
												<td class="text-center">
													<div class="actions">
														<a class="btn btn-sm bg-success-light" href="'.url('categorie',$category).'">
															<i class="fe fe-pencil"></i> Editar
														</a>
														<a  href="'.url('categorie/delete',$category).'" class="btn btn-sm bg-danger-light" >
															<i class="fe fe-trash"></i> Apagar
														</a>
													</div>
												</td>
											</tr>';
									}

							@endphp
							

						
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>			
</div>

<!-- Delete Modal -->
{{-- <x-modals.delete :route="'categories'" :title="'Category'" /> --}}
<!-- /Delete Modal -->
@endsection


@push('page-js')
<!-- Select2 JS -->
	<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
	<script>
		$(document).ready(function() {
			$('#category-table').on('click','.editbtn',function (){
				event.preventDefault();
				jQuery.noConflict();
				$('#edit_category').modal('show');
				var id = $(this).data('id');
				var name = $(this).data('name');
				$('#edit_id').val(id);
				$('.edit_name').val(name);
			});
			//
		});
	</script>
	
@endpush
