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
	<!-- Modal Cadastrar-se -->

	<form method="POST" action="{{route('usuario.store')}}" class="cadastrar" enctype="multipart/form-data">
		 	{!! csrf_field() !!}
  			<div class="modal-body">
				<p><label>Nome: </label>
					<input class="form-control" placeholder="Nome:" type="text" name="name" required="" value="{{old('name')}}"></p><br />
				<p><label>Email: </label>
					<input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email: email@examplo.com" required autofocus="" value="{{old('email')}}" /></p><br />

				<p><label>Senha: </label>
					<input class="form-control" type="password" name="password" placeholder="Senha" required="" /></p>
				<p><label for="file">Foto: </label>
				<input type="file" class="form-control-file" id="file" name="image"></p>

				<p><label>Escolha seu nivel Gamer</label>
				<select name="categoria" required>
					@foreach ($nivel as $niveis)
						<option value="{{$niveis}}">{{$niveis}}</option>
					@endforeach
				</select></p><br />
	
				<p><label>Sexo: </label>
				<div class="sexo"> 
					<input type="radio" name="sexo" value="1" /> Masculino
					<input type="radio" name="sexo" value="2" /> Feminino
					<input type="radio" name="sexo" value="3" /> Outro
				</p>
				</div><br /><br />

				<p><textarea class="caixatext" name="descricao"  placeholder="Comentarios...." rows="10" cols="30" maxlength="1000"></textarea>
				</p><br />				
		</div>
		
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				<button type="submit" class="btn btn-primary">Cadastro</button>
			</div>
    </form>
@endsection
@endsection