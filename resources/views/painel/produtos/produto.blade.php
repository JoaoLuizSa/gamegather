@extends('site.templates.template')
@section('content')
<h1>Produto</h1>

<h2>Tabela de produtos</h2>
<table class="table">
 <thead class="thead-dark">
<tr>
	<th scope="col">#</th>
	<th scope="col">Nome</th>
	<th scope="col">Numero</th>
	<th scope="col">Categoria</th>
	<th scope="col">Descrição</th>
</tr>
@foreach($prod as $product)
<tbody>
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->name}}</td>
      <td>{{$product->number}}</td>
	  <td>{{$product->categoria}}</td>
	  <td>{{$product->descricao}}</td>
    </tr>
   </tbody>
@endforeach
</thead>
</table>
@endsection