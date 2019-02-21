@extends('site.templates.template')
@section('content')
<!-- Modal Logar-se -->
<div class="modal fade" id="modallog" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content" >
	  <div class="modal-header">
		<h5 class="modal-title" id="exampleModalLongTitle">Log-in</h5>
			<button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  </div>
		<div class="modal-body" style="margin-top:-40px;">
			<form class="logar">
  			<h1 >Logue-se por favor</h1>
				<input type="email" id="inputEmail" class="form-control" placeholder="Email: email@examplo.com" required="" autofocus="" />
				<br />
				<input class="form-control" type="password" id="inputPassword" placeholder="Senha" required="" />
				<div style="text-align:Left">
					<label ><input  type="checkbox" value="remember-me">Lembrar Senha</label>
				</div>				
			</form>
		</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				<button type="button" class="btn btn-primary">Logar</button>
	  </div>
	 </div>
    </div>
</div>
@endsection