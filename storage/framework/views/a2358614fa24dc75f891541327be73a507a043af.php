<!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<meta content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="João">
		
		<!--Titulo e icone-->
		<title><?php echo e(isset($title) ? $title : 'Game gather-GG'); ?></title>
		<link rel="shortcut icon" href="<?php echo e(asset('assets/all/images/logos/favicon.ico')); ?>" />
		
		<!--Chamando  JavaScript -->
		<script type="text/javascript" src="<?php echo e(asset('assets/all/js/scriptgamegather.js')); ?>"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		
		<script type="text/javascript" src="<?php echo e(asset('assets/all/js/jquery-3.3.1.min.js')); ?>"></script>
		<script type="text/javascript" src="<?php echo e(asset('assets/all/js/bootstrap.min.js')); ?>"></script>
		
		<!--Passando mouse no gamegather -->
		<script type="text/javascript">
			$(document).ready(function(){
 			$('#conteudo').hide();

			$('#gamegather').mouseover(function(){
     		$('#conteudo').show();});
			$('#conteudo').mouseover(function(){
		    $('#conteudo').show();})

		    $('#conteudo').mouseout(function(){
		    $('#conteudo').hide();})
		  	$('#gamegather').mouseout(function(){
		    $('#conteudo').hide();})
		    
		});
		</script>
		<!--Subindo ao topo -->
		<script type="text/javascript">
		jQuery(document).ready(function(){

		jQuery("#subirTopo").hide();

		jQuery('a#subirTopo').click(function () {
		         jQuery('body,html').animate({
		           scrollTop: 0
		         }, 800);
		        return false;
		   });
		jQuery(window).scroll(function () {
		         if (jQuery(this).scrollTop() > 1000) {
		            jQuery('#subirTopo').fadeIn();
		         } else {
		            jQuery('#subirTopo').fadeOut();
		         }
		     });
		});
		</script>
		<!--Mudando a foto do nav -->		
		<script type="text/javascript">
		function mudafoto(pic){
		document.getElementById("glass").src ="assets/all/images/fotosnav/"+pic+".png";}
	</script>
	

		<!--Chamando  CSS -->
		
		<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/all/css/bootstrap.min.css')); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/all/css/stylegamegather.css')); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/all/css/redessociais.css')); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/all/css/form.css')); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/all/css/buscaecadlog.css')); ?>" />




	</head>
	<body onLoad="data()" class="color">

<section class="secao">
		
	
<!-- INÍCIO DO CABEÇALHO -->

<!-- FIM DO CABEÇALHO -->


<!--INICIO BARRA NAVEGAVEL -->


	<nav class="navbar navbar-expand-md ">
		<div class="container principal">
				 <ul class="navbar-nav principal">
							  <li class="nav-item active dropdown" onmouseover="mudafoto('gamegather')" onmouseout="mudafoto('padrao')">
										<a class="navbar-brand gg" href="#" onmouseover="#" id="gamegather" role="button" data-toggle="dropdown" aria-expanded="true">Game Gathers
										</a>	
									<div class="dropdown-menu"  id="conteudo">
										<a class="dropdown-item" href="<?php echo e(url('/historia')); ?>">História
										</a>
										<a class="dropdown-item" href="<?php echo e(url('/equipe')); ?>">Equipe
										</a>
										<a class="dropdown-item" href="<?php echo e(url('/objetivos')); ?>">Objetivos
										</a>
										<a class="dropdown-item" href="<?php echo e(url('/mercado-games')); ?>">Mercado Games
										</a>
										<a class="dropdown-item" href="<?php echo e(url('/parceiros')); ?>">Parceiros
										</a>
										<a class="dropdown-item" href="<?php echo e(url('/doc')); ?>">Documentação
										</a><!--White paper-->
										<a class="dropdown-item" href="<?php echo e(url('/fale-conosco')); ?>">Fale Conosco
										</a>
									</div>
								</li>
					</ul>
							  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							  </button>

							  <div class="collapse navbar-collapse" id="navbarsExample04">
								
								  <li class="nav-item active extras" onmouseover="mudafoto('home')" onmouseout="mudafoto('padrao')">
										<a class="nav-link" href="<?php echo e(route('home.index')); ?>" target="_self">Inicio
										</a>
								  </li>
								  
								  <li class="nav-item active extras" onmouseover="mudafoto('toxicgamer')" onmouseout="mudafoto('padrao')">
									<a class="nav-link" href="<?php echo e(url('/jogadorestoxicos')); ?>" target="_self">Jogadores Toxicos
									</a>
								  </li>
								  <li class="nav-item dropdown active extras" onmouseover="mudafoto('games')" onmouseout="mudafoto('padrao')">
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" target="_self">Jogos
										</a> 
										<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="<?php echo e(url('/lol')); ?>" target="_self">League of Legends
										</a>
										<a class="dropdown-item" href="<?php echo e(url('/dota')); ?>" target="_self">DOTA 2
										</a>
										<a class="dropdown-item" href="<?php echo e(url('/wow')); ?>" target="_self">World of Warcraft
										</a>
										<a class="dropdown-item" href="<?php echo e(url('/fifa')); ?>" target="_self">FIFA 19
										</a>
										<a class="dropdown-item" href="<?php echo e(url('/cs-go')); ?>" target="_self">Counter Strike-GO
										</a>
										
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="<?php echo e(url('/discord')); ?>" target="_self">Discord</a><!--Gamebridge and hypesquad-->
										</div>
								   </li>
								   <li class="nav-item active extras" style="margin-left: 15px;">
									<img id="glass" src="<?php echo e(asset('assets/all/images/fotosnav/padrao.png')); ?>"/>
								   </li>
								
							</div>
		</div>
    </nav>
<!-- FIM DA BARRA NAVEGAVEL -->

<!-- INÍCIO DO FORMULARIO -->
<div class="modal fade" id="modalform" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
	 <div class="modal-content" >
	  <div class="modal-header">
	  	<h1 style="color: black;text-align: center;height: 50px;font-size:10pt;">Preencha por favor</h1>
				<button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
				</button>
			</div>
		
	<form method="POST" action="<?php echo e(route('formulario.store')); ?>" class="primeiro" class="form">
		<?php echo csrf_field(); ?>

			<div class="modal-body">
			<label><p>Nome: <input type="text" name="name" value="<?php echo e(old('name')); ?>" required></p></label>
			<label><p>Email: <input type="text" name="email" value="<?php echo e(old('email')); ?>" required></p></label>
			<label>Idade:
			<select class="idade" name="idade">
					<option value="">Escolha sua idade</option>
					<option value="1">Menor de 18</option>
					<option value="2">Entre 18 e 60</option>
					<option value="3">Maior que 60</option>
			</select></label>
			<label><p>Sexo: 
			<div class="sexo"> 
				<input type="radio" name="sexo" value="1" /> Masculino
				<input type="radio" name="sexo" value="2" /> Feminino
				<input type="radio" name="sexo" value="3" /> Outro
				</p></label>
			</div><br />
			<!--<label><input type="date" onLoad="pickadatedata()" name="datas"></label>-->
			<p><textarea class="caixatext" name="descricao"  placeholder="Comentarios...." rows="10" cols="30" maxlength="1000" value="<?php echo e(old('descricao')); ?>"></textarea>
			</p><br />
		</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				<button class="btn btn-dark" type="reset">Limpar</button></p>
				<button type="submit" class="btn btn-primary">Enviar</button>
	  		</div>
	</form>
	 </div>
	</div>
			
</div>
<!-- FIM DO FORMULARIO -->

<!-- INÍCIO DA PAGINA -->
<div class="container pages">
		<?php echo $__env->yieldContent('pagina'); ?>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
			
			<div class="container group user">
	
				<ul class="nav navbar-nav" >
					<div class="left" id="busca">
						<li>
						<form method="post" action="<?php echo e(url('/formulario/shows')); ?>" class="form">
							<?php echo csrf_field(); ?>

							<input id="bSite" type="text" name="busca" value="Busca no Site" onfocus="buscar(this.id);" />					
							<button type="submit" class="btn btn-primary">Buscar</button>
						</form>
						</form>
						</li>
					</div>
					
					<div class="left" id="usa">
						<li style="font-size: 150%; color:white">
						<?php if(isset($dados)): ?>
						<a href="<?php echo e(route('usuario.edit',$dados->id)); ?>"><?php echo e($dados->name); ?></a>
						<a href="<?php echo e(url('/home')); ?>"><button>Sair</button></a>
						</li>
					</div>

					<div class="left" id="cadlog">
						<li class="right">
						<?php else: ?>
							<a href="<?php echo e(route('usuario.create')); ?>"><button type="button" class="btn btn-danger">Cadastrar-se</button></a>
					
							<a href="<?php echo e(url('/usuario/login')); ?>"><button type="button" class="btn btn-primary">Logar-se</button></a>
						</li>
						<?php endif; ?>
					</div>
				</ul>
			</div>
		</nav>
		<br />
		<section id="section-left">
			<article id="notice">
				<?php echo $__env->yieldContent('secao'); ?>
			</article>
		</section>
		<br />
</div>		


</section>
		<!-- FIM DA PAGINA -->
<!-- INÍCIO DO RODAPÉ -->
<section class="secao">
	<div class="container">
		<footer id="footer-pe">
		<div>
			<h5>Obrigado pela visita</h5>
			<h6>Gostaria de nos dar uma Sugestão, critica ou elogio?</h6>
			<h6>Clique no chat abaixo e preencha o formulario</h6>
			<ul>
			<li>
				<a href="#" type="button" data-toggle="modal" data-target="#modalform">
				<img class="chat" src="<?php echo e(asset('assets/all/images/componentes/chat.png')); ?>" alt="CHAT BOX" /></a>
			</li>
			</ul>
		</div>
		
	<!-- Redes Sociais -->
		<div class="redes">
				<a href="https://www.facebook.com/DeveresHumanos2018/?modal=admin_todo_tour" target="_blank">
				<div class="rede" id="facebook" >
					<img class="icone" src="<?php echo e(asset('assets/all/images/componentes/facebook.png')); ?>" alt="Facebook" /></div></a>
				<div class="rede" id="twitter">
					<img class="icone" src="<?php echo e(asset('assets/all/images/componentes/twitter.png')); ?>" alt="Twitter"/></div>
				<div class="rede" id="instagram">
					<img class="icone" src="<?php echo e(asset('assets/all/images/componentes/instagram.png')); ?>" alt="Instagram"/></div>
				<div class="rede" id="snap">
					<img class="icone" src="<?php echo e(asset('assets/all/images/componentes/snap.png')); ?>" alt="SnapChat"/></div>
				<div class="rede" id="plus">
					<img class="icone" src="<?php echo e(asset('assets/all/images/componentes/plus.png')); ?>" alt="Google Plus"/></div>
				<div class="rede" id="youtube">
					<img class="icone" src="<?php echo e(asset('assets/all/images/componentes/youtube.png')); ?>" alt="Youtube"/></div>
		</div>
		<a id="subirTopo" role="link" ><img src="<?php echo e(asset('assets/all/images/componentes/indice.png')); ?>" alt="topo" /></a>
		<div class="p">
 Game Gathers&trade; Copyright &copy; 2019
		</div>
		<div class="clock">
			<span id="clock"></span>
		</div>
		
		</footer>	
	</div>
</section>

<!-- FIM DO RODAPÉ -->
	</body>
</html>