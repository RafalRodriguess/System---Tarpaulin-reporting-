<!-- Sidebar -->
<div class="sidebar" id="sidebar">
	<div class="sidebar-inner slimscroll">
		<div id="sidebar-menu" class="sidebar-menu">
			
			<ul>
				{{-- <li class="menu-title"> 
				</li> --}}
				<li class="{{ Request::routeIs('dashboard') ? 'active' : '' }}"> 
					<a href="{{route('dashboard')}}"><i class="fe fe-home"></i> <span>Controler</span></a>
				</li>
				
				@can('view-category')
				<li class="{{ Request::routeIs('categorie') ? 'active' : '' }}"> 
					<a href="{{url('categorie')}}"><i class="fe fe-layout"></i> <span>Laudos</span></a>
				</li>
				@endcan
				
				@can('view-products')
				{{-- <li class="submenu">
					<a href="#"><i class="fe fe-document"></i> <span> OS</span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						@can('view-products')<li><a class="{{ Request::routeIs(('products')) ? 'active' : '' }}" href="{{route('products')}}">OS</a></li>@endcan
						@can('create-product')<li><a class="{{ Request::routeIs('add-product') ? 'active' : '' }}" href="{{route('add-product')}}">Adicionar OS</a></li>@endcan
					</ul>
				</li> --}}
				@endcan
				
				@can('view-purchase')
				{{-- <li class="submenu">
					<a href="#"><i class="fe fe-star-o"></i> <span> Caminhões</span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a class="{{ Request::routeIs('purchases') ? 'active' : '' }}" href="{{route('purchases')}}">Ver Caminhões</a></li>
						@can('create-purchase')
						<li><a class="{{ Request::routeIs('add-purchase') ? 'active' : '' }}" href="{{route('add-purchase')}}">Adicionar Caminhões</a></li>
						@endcan
					</ul>
				</li> --}}
				@endcan
				@can('view-sales')
				{{-- <li><a class="{{ Request::routeIs('sales') ? 'active' : '' }}" href="{{route('sales')}}"><i class="fe fe-activity"></i> <span>Ordem de Serviço</span></a></li> --}}
				@endcan
				@can('view-supplier')
				{{-- <li class="submenu">
					<a href="#"><i class="fe fe-user"></i> <span> Motoristas</span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a class="{{ Request::routeIs('suppliers') ? 'active' : '' }}" href="{{route('suppliers')}}">Ver Motoritas</a></li>
						@can('create-supplier')<li><a class="{{ Request::routeIs('add-supplier') ? 'active' : '' }}" href="{{route('add-supplier')}}">Adicionar Motoristas</a></li>@endcan
					</ul>
				</li> --}}
				@endcan

				@can('view-reports')
				{{-- <li class="submenu">
					<a href="#"><i class="fe fe-document"></i> <span> Relatórios</span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a class="{{ Request::routeIs('reports') ? 'active' : '' }}" href="{{route('reports')}}">Gerar Relatórios</a></li>
					</ul>
				</li> --}}
				@endcan

				@can('view-access-control')
				<li class="submenu">
					<a href="#"><i class="fe fe-lock"></i> <span>Permissões de Acessos</span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						@can('view-permission')
						<li><a class="{{ Request::routeIs('permissions') ? 'active' : '' }}" href="{{route('permissions')}}">Permissões</a></li>
						@endcan
						@can('view-role')
						<li><a class="{{ Request::routeIs('roles') ? 'active' : '' }}" href="{{route('roles')}}">Papéis</a></li>
						@endcan
					</ul>
				</li>					
				@endcan

				@can('view-users')
				<li class="{{ Request::routeIs('users') ? 'active' : '' }}"> 
					<a href="{{route('users')}}"><i class="fe fe-users"></i> <span>Usuários</span></a>
				</li>
				@endcan
				
				<li class="{{ Request::routeIs('profile') ? 'active' : '' }}"> 
					<a href="{{route('profile')}}"><i class="fe fe-user-plus"></i> <span>Perfil</span></a>
				</li>
				@can('view-settings')
				<li class="{{ Request::routeIs('settings') ? 'active' : '' }}"> 
					<a href="{{route('settings')}}">
						<i class="fa fa-gears"></i>
						 <span> Configurações</span>
					</a>
				</li>
				@endcan
			</ul>
		</div>
	</div>
</div>
<!-- /Sidebar -->