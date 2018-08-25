<!DOCTYPE html>
<html>
	<head>
		<title> Tacio's Framework v.1.0 </title>

		<link rel="stylesheet" type="text/css" href="<?php echo $this->url( 'assets/css/style.css' ); ?>">

	</head>

	<body>
		<div style="text-align: center">

			<h1><?php echo $hello; ?></h1>
			<p><?php echo $message; ?></p>


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
						// url: 'https://insertweb.com.br/clientes/personal/service/postStudent',
						url: 'http://localhost/app_personal/backend/service/postActivities/sent',
						type: 'POST',
						dataType: 'json',
						data: {
							loginType: 'personal',
							username: '05002556108',
							password: '211540',
							id_personal: 22,
							id_student: [9],
							save_model: 1,
							title: 'Ludicidade na educação ',
							description: 'Ensinar aos alunos sobre Ludicidade, com apresentação oral de 20 minutos.',
							date_activity: '2018-04-15',
							// status: 1,
							// id_student: 15,
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