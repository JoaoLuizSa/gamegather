@extends('site.templates.template')
@section('pagina')
<!--@if (isset ($errors) && count($errors)>0)
	<div class="alert alert-danger">
		@foreach($errors->all() as $error)
			<p>{{$error}}</p>
		@endforeach
	</div>
	@endif-->
@if (isset($formu))
<form method="POST" action="{{route('formulario.update', $formu->id)}}" class="primeiro" class="form">
	{!! method_field('PUT') !!}
@else
<form method="POST" action="{{route('formulario.store')}}" class="primeiro" class="form">
@endif
			{!! csrf_field() !!}
			<h1 >Preencha por favor</h1>
			<label><p>Nome: <input type="text" name="name" value="{{$formu->name or old('name')}}" required></p></label><br />
			<label><p>Email: <input type="text" name="email" value="{{$formu->email or old('email')}}" required></p></label><br />
			<p>Idade:
			<select class="idade" name="idade">
					<option value="">Escolha sua idade</option>
					@foreach($idade as $idad)
					<option value="{{$idad}}" 
					@if (isset($formu) && $formu->idade==$idad)
						selected
					@endif	
					>{{$idad}}</option>
					@endforeach
					
			</select></p><br />
			
			<p><fieldset><legend>Sexo: </legend>
				<input class="form-control" type="radio" name="sexo" value="1" /> Masculino
				<input class="form-control" type="radio" name="sexo" value="2" /> Feminino
			<input class="form-control" type="radio" name="sexo" value="3" /> Outro
				</fieldset></p><br />
			<p><textarea class="caixatext" name="descricao"  placeholder="Comentarios...." rows="10" cols="30" maxlength="1000" value="{{$formu->descricao or old('descricao')}}"></textarea>
			</p><br />
		</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				<button class="btn btn-dark" type="reset">Limpar</button></p>
				<button type="submit" class="btn btn-primary">Enviar</button>
	  		</div>
	</form>

@endsection