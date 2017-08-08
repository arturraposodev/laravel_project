@extends ('Painel.Template.template')

@section ('content')



<h1 style="font-size:38px;font-weight:100px;">Listagem de Produtos</h1>
<a href="{{route ('produtosnovos.create')}}" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>Cadastrar</a>
<table class="table table-striped">
	<tr>
		<th>Nome</th>
		<th>Descrição</th>
		<th width="100px">Ações</th>
	</tr>
	@foreach ($products as $product)
	<tr>
		<td> {{$product-> name }}</td>
		<td> {{$product-> description }}</td>
		<td>
			<a href="" >
			<span class="glyphicon glyphicon-pencil" style="background:#291966;font-size: 8px; padding:10px; color: #fff;" ></span>
			</a>
			<a href="">
				<span class="glyphicon glyphicon-trash" style="background-color: #A50D1D;;font-size: 8px; padding:10px; color: #fff;"></span>
			</a>
		</td>

	</tr>
	@endforeach
</table>

@endsection