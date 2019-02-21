@extends('site.templates.template')
@section('pagina')
<div class="titulos">
<h1>{{$titulo}}</h1>
</div>
@section('secao')
	<hgroup>
		<header id="cabecalho-notice">
			<h3>{{$caminho}}</h3><br /><br />
			<h4>{{$notice}}</h4><br  />
			<h4 class="direita">Edição João Luiz</h4><br /><br />
			<h4 class="direita">Atualizado em 25/Janeiro/2019</h4><br /><br />
		</header>
	</hgroup>

@endsection
@endsection

