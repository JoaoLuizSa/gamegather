@extends('site.templates.template')
@section('content')
<h1>Formularios Recebidos</h1>

<h2>Tabela de Formularios recebidos</h2>
<table class="table">
 <thead class="thead-dark">
<tr>
	<th scope="col">#</th>
	<th scope="col">Nome</th>
	<th scope="col">Email</th>
	<th scope="col">Idade</th>
	<th scope="col">Sexo</th>
	<th scope="col">Descrição</th>
	<th scope="col" width="100px">Ações</th>
</tr>
@foreach($formu as $form)
<tbody>
    <tr>
      <th scope="row">{{$form->id}}</th>
      <td>{{$form->name}}</td>
      <td>{{$form->email}}</td>
	  <td>{{$form->idade}}</td>
	  <td>{{$form->sexo}}</td>
	  <td>{{$form->descricao}}</td>
	  <td>
	  	<a href="{{route('formulario.edit',$form->id)}}" class="actions edit">
	  		<button type="button" data-toggle="modal" data-target="#modalform">Editar</button>
	  	</a>
	  	<a href="{{route('formulario.destroy',$form->id)}}" class="actions delete">
	  		<button>Deletar</button>
	  	</a>
	  </td>
    </tr>
   </tbody>
@endforeach
</thead>
</table>
@endsection