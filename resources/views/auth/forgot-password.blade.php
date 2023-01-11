@extends('layouts.auth')

@section('content')
<h1>Esqueceu a senha?</h1>
<p class="account-subtitle">Digite seu e-mail para obter um link de redefinição de senha</p>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- Form -->
<form action="{{route('forgot-password')}}" method="post">
	@csrf
	<div class="form-group">
		<input class="form-control" name="email" type="text" placeholder="Email">
	</div>
	<div class="form-group mb-0">
		<button class="btn btn-primary btn-block" type="submit">Resetar Senha</button>
	</div>
</form>
<!-- /Form -->

<div class="text-center dont-have">Lembrou sua senha? <a href="{{route('login')}}">Entrar</a></div>
@endsection
