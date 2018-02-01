<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Funcionários</title>
	

</head>
<body>
	<table>
	<tr>
		<th>NOME</th>
		<th>DATA CONTRATAÇÃO</th>
		<th>SALÁRIO</th>
	</tr>
	@foreach($funcionarios as $funcionario)
	<tr>
		<td>{{ $funcionario->nome }}</td>
		<td>{{ $funcionario->ano_contratacao }}</td>
		<td>{{ $funcionario->salario }}</td>
	</tr>
	@endforeach
	</table>

	<table>
		<th>TOTAL: </th>
		@foreach($total as $tota)
		<th>{{ $tota->salario }}</th>
		@endforeach
	</table>
</body>
</html>