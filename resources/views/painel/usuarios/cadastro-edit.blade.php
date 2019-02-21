@extends('site.templates.template')
@section('content')
<!-- Modal Cadastrar-se -->
<div class="modal fade" id="modalcadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
	 <div class="modal-content" >
	  <div class="modal-header">
		<h5 class="modal-title" id="exampleModalLongTitle">Cadastro</h5><button class="close" data-dismiss="modal" aria-label="Close"><span  aria-hidden="true">&times;</span></button>
	  </div>
		<div class="modal-body" style="margin-top:-40px;">
		 <form method="POST" action="{{route('usuario.store')}}" class="cadastrar">
		 	{!! csrf_field() !!}
  			<fieldset><legend><h1>Cadastre-se por favor</h1></legend>
				<p><label>Nome: </label><input type="text" name="name" required="" value="{{old('name')}}"></p><br />
				<p><label>Email: </label><input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email: email@examplo.com" required autofocus="" /></p>
				<br />
				<p><label>Senha: </label><input class="form-control" type="password" name="senha" placeholder="Senha" required="" /></p>
				<p><div>
				<label for="file">Foto: </label>
				<input type="file" class="form-control-file" id="file">
				</div></p>
				<label for="categoria">Escolha seu nivel Gamer</label>
				<p><select name="categoria" required>
					<option></option>
					<option value="1">Gamer Iniciante</option>
					<option value="2">Gamer Casual</option>
					<option value="3">Gamer Hardcore</option>
				</select></p><br />
		<!--<label for="idade"></label>
		<input type="date" name="nasci">-->
			<p><fieldset><legend>Sexo: </legend>
				<input class="form-control" type="radio" name="sexo" value="1" /> Masculino
				<input class="form-control" type="radio" name="sexo" value="2" /> Feminino
				<input class="form-control" type="radio" name="sexo" value="3" /> Outro
				</fieldset></p><br />
				<p><textarea class="caixatext" name="descricao"  placeholder="Comentarios...." rows="10" cols="30" maxlength="1000"></textarea>
				</p><br />				
		</div>
	</fieldset>
		<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				<button type="submit" class="btn btn-primary">Cadastro</button>
		</div>
		 </form>
		
			</div>
			</div>
		</div>
@endsection