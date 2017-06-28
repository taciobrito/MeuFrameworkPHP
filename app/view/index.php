<!DOCTYPE html>
<html>
<head>
	<title> Title </title>
</head>
<body>

	<h1>Welcome, Tacio's Framework</h1>

	<table style="width: 300px; text-align: left; border: solid 1px #ccc;">
		<tr>
			<th>Nome</th>
			<th>Nascimento</th>
		</tr>
		<?php 
			foreach ($clientes as $cliente) {
				echo "<tr>";
					echo "<td>" . $cliente->nome . "</td>";
					echo "<td>" . \DateHelper::dateFormat($cliente->data_nascimento) . "</td>";
				echo "</tr>";
			}
		?>
	</table>

</body>
</html>