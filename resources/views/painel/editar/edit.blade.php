@extends('site.templates.template')
@section('pagina')
<link rel="stylesheet" type="text/css" href="{{asset('assets/painel/css/stylegamegather.css')}}" />
<div class="titulos">
<h1>{{$titulo}}</h1>
</div>
@section('secao')
	<hgroup>
		<header id="cabecalho-notice">
			<h3>{{$caminho}}</h3><br /><br />
		</header>
	</hgroup>
<!-- Modal Logar-se -->

			<form method="POST" class="editar" action="{{route('usuario.update',$dados->id)}}" enctype="multipart/form-data"> 
				{!! csrf_field() !!}{!! method_field('PUT') !!}
  			<h1 >Altere o que desejar e redigite a senha</h1>

  				@if($dados->image != null)
  					<img src="{{url('storage/usuarios/'.$dados->image)}}" alt="{{$dados->image}}" style="max-width: 250px; ">
  				@endif
  				<br /><br />
				<p><label>Altere Nome: </label>
					<input class="form-control" placeholder="Nome:" type="text" name="name" required="" value="{{old('name')}}"></p><br />
					<p><label>Altere Email: </label>
				<input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email: email@examplo.com" required="" autofocus="" /></p>
				<br />
				<p><label>Redigite a senha para confirmar: </label>
				<input name="password" class="form-control" type="password" id="inputPassword" placeholder="Senha" required="" />
				
				<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				<button type="submit" class="btn btn-primary">Alterar</button>
	  			</div>			
			</form>
@endsection
@endsection