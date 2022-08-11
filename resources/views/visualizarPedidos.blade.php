<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Laravel</title>

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"></link>

		<style>
			body
			{
				margin:10px;
			}
			.thead-light
			{
				background-color: #f8f9fa;
			}
		</style>
	</head>
	<body>
		<div>
			<table class="table table-hover">
				<thead class="thead-light">
					<tr>
						<th scope="col">Id do Pedido</th>
						<th scope="col">data de entrega</th>
						<th scope="col">valor do frete</th>
						<th scope="col">descrição</th>
						<th scope="col">Id do Cliente</th>
					</tr>
				</thead>
				<tbody>
					@foreach($pedido as $valores)
					<tr>
						<th scope="row">{{ $valores->idPedido }}</th>
						<td>{{ $valores->dataEntrega }}</td>
						<td>{{ number_format($valores->valorFrete, 2) }}</td>
						<td>{{ $valores->descricao }}</td>
						<td>{{ $valores->idCliente }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</body>
</html>