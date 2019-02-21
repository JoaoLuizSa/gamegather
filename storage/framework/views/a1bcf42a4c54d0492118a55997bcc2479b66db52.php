<!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<meta content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="João">
		<!--Titulo e icone-->
		<title><?php echo e(isset($title) ? $title : 'Game gather-GG'); ?></title>
		<link rel="shortcut icon" href="images/favicon.ico" />
		<!--Chamando  JavaScript -->
		<script type="text/javascript" src="js/scriptgamegather.js"></script>
		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<!--Chamando  CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="css/stylegamegather.css" rel="stylesheet" type="text/css" />
	</head>
	<body onLoad="data()" class="color" >
	<!-- Dia e hora -->
		<div class="hora">
			<span id="clock"></span><br />
		</div>
		<p class="contato">Siga nos em nossas redes sociais:</p>
	<!-- Redes Sociais -->
			<p>
			<section>
				<a href="https://www.facebook.com/DeveresHumanos2018/?modal=admin_todo_tour" target="_blank">
				<div class="rede" id="facebook" >
					<img class="icone" src="images/facebook.png" alt="Facebook" /></div></a>
				<div class="rede" id="twitter">
					<img class="icone" src="images/twitter.png" alt="Twitter"/></div>
				<div class="rede" id="instagram">
					<img class="icone" src="images/instagram.png" alt="Instagram"/></div>
				<div class="rede" id="snap">
					<img class="icone" src="images/snap.png" alt="SnapChat"/></div>
				<div class="rede" id="plus">
					<img class="icone" src="images/plus.png" alt="Google Plus"/></div>
				<div class="rede" id="youtube">
					<img class="icone" src="images/youtube.png" alt="Youtube"/></div>
			</section>
			</p>
	<!-- Barra navegavel -->
	<nav class="navbar navbar-expand-md navbar-dark">
		<li class="nav-item dropdown active">
				<a class="barraleft" class="navbar-brand" href="#" id="gamegather" role="button" data-toggle="dropdown" aria-expanded="true">Game Gathers</a>
			<div class="dropdown-menu" >
				<a class="dropdown-item" href="#">Alternativa1</a>
				<a class="dropdown-item" href="#">Alternativa2</a>
				<a class="dropdown-item" href="#">Alternativa3</a>
				<a class="dropdown-item" href="#">Alternativa4</a>
				<a class="dropdown-item" href="#">Alternativa5</a>
				<a class="dropdown-item" href="#">Alternativa6</a>
				<a class="dropdown-item" href="#">Alternativa7</a>
			</div>
		</li>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ">
					<li class="nav-item active">
						<a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#">Jogadores Toxicos</a>
					</li>
					<li class="nav-item dropdown active">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opções</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Opção1</a>
						<a class="dropdown-item" href="#">Opção2</a>
				<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Opção3</a>
			</div>
					</li>
				</ul>
			
			</div>
			<ul>
					<li class="busca">
						<input id="bSite" style="width:70%" name="busca" type="text" value="Busca no Site" onfocus="buscar(this.id);" />
						<input type="submit" value="Buscar"></input>
					</li>
				</ul>
				<ul class="navbar-nav" >
					<li style="margin-right:10px;">
						<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modalcadastro">Cadastrar-se</button>
					</li>
					<li style="margin-right:5px">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modallog">Logar-se</button>
					</li>
				</ul>
	</nav>
	<?php echo $__env->yieldContent('content'); ?>
<div class="modal fade" id="modalform" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content" >
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Formulario</h5>
				<button class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<div class="modal-body" style="margin-top:-40px;">
			<form class="primeiro">
			<h1 >Preencha por favor</h1>
			<p>Nome: <input/ type="text"></p><br />
			<p>Idade:
			<select class="idade" >
					<option>Escolha sua idade</option>
					<option value="1">Menor de 18</option>
					<option value="2">Entre 18 e 60</option>
					<option value="3">Maior que 60</option>
			</select></p><br />
			<p class="sexo">Sexo: 
				<input class="form-control" type="radio" name="sexo" value="1" /> Masculino
				<input class="form-control" type="radio" name="sexo" value="2" /> Feminino
			</p><br />
			<p><textarea class="caixatext" name="comentario"  placeholder="Comentarios...." rows="10" cols="30" maxlength="1000"></textarea>
			</p><br />
		</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				<button class="btn btn-dark" type="reset">Limpar</button></p>
				<button type="button" class="btn btn-primary">Enviar</button>
			</div>
			</div>
			</div>
			</form>
		</div>
		<!-- Modal Logar-se -->
		<div class="modal fade" id="modallog" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content" >
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Log-in</h5>
				<button class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
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
		<!-- Modal Cadastrar-se -->
		<div class="modal fade" id="modalcadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content" >
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Cadastro</h5>
				<button class="close" data-dismiss="modal" aria-label="Close">
					<span  aria-hidden="true">&times;</span>
				</button>
			</div>
		<div class="modal-body" style="margin-top:-40px;">
			<form class="cadastrar">
  			<h1 >Cadastre-se por favor</h1>
				<input type="email" id="inputEmail" class="form-control" placeholder="Email: email@examplo.com" required="" autofocus="" />
				<br />
				<input class="form-control" type="password" id="inputPassword" placeholder="Senha" required="" />
			</form>
		
				<div class="form-group">
					<label for="exampleFormControlFile1">Adicione uma foto</label>
					<input type="file" class="form-control-file" id="exampleFormControlFile1">
				</div>
		</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				<button type="button" class="btn btn-primary">Cadastro</button>
			</div>
			</div>
			</div>
		</div>
		
		<div>
			<ul>
			<li style="margin-right:5px">
				<button type="button" data-toggle="modal" data-target="#modalform">
				<img class="chat" src="images/chat.png" alt="CHAT BOX" /></button>
			</li>
			</ul>
		</div>
		
		<p class="mt-5 mb-3 " style=""> Game Gathers © 2019</p>

		<?php echo $__env->yieldPushContent('contato'); ?><!-- Utilizando conteudo exclusvo para uma pagina-->
	</body>
</html>