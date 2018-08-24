<!DOCTYPE html>
<html>
	<head>
		<title> Tacio's Framework v.1.0 </title>

		<link rel="stylesheet" type="text/css" href="<?php echo $this->url( 'assets/css/style.css' ); ?>">

	</head>

	<body>
		<div style="text-align: center">

			<h1><?php // echo $hello; ?></h1>
			<p><?php // echo $message; ?></p>


			<!-- <table style="width: 100%">
					<tr>
						<th>#</th>
						<th>nome</th>
						<th>cpf</th>
						<th>nascimento</th>
						<th>endereço</th>
					</tr>

			<?php 
				foreach ($pessoas as $pessoa) {
			 ?>
					<tr>
						<td><?php echo $pessoa->id; ?></td>
						<td><?php echo $pessoa->nome; ?></td>
						<td><?php echo $pessoa->cpf; ?></td>
						<td><?php echo DateHelper::dateFormat($pessoa->dt_nasc); ?></td>
						<td><?php echo $pessoa->endereco; ?></td>
					</tr>	
			<?php 
				}
			 ?>
				</table>

		</div>

<br>
<br>
<br>
		<div style="text-align: center">
			<form action="https://insertweb.com.br/clientes/personal/service/getUser" method="POST">
				USENAME <br>
				<input type="text" name="username" /> <br>
				PASSWORD <br>
				<input type="password" name="password" /> <br>

				<input type="submit" value="ENVIAR" /> 
			</form> -->

			<br><br><br>
			<button id="env">Enviar</button>

		</div>

		<script src="<?php echo $this->url('assets/js/jquery.min.js'); ?>"></script>

		<script>
			// $('#env').click(function(event) {
					$.ajax({
						url: 'http://insertweb.com.br/clientes/personal/service/getCalendar',
						// url: 'http://localhost/app_personal/backend/service/getCalendar',
						type: 'POST',
						dataType: 'json',
						data: {
							loginType: 'personal', // personal ou student
							id: 13, // irá se referir ao ID do usuário do sitema, de acordo com o loginType
							status: 1, // Opcional. só irá passar o status com 1,2 ou 3, senão irá trazer todos
							// mes: '02', // opcional, senão passar o mês, será por padrão o atual
							// id_personal: 13,
						},
						success: function(d) {
							console.log(d);
							console.log("success");
						},
					});
				// });
		</script>
	</body>

</html>