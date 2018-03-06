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

			<br><br><br>
			<button id="env">Enviar</button>

		</div>

		<script src="<?php echo $this->url('assets/js/jquery.min.js'); ?>"></script>

		<script>
			$('#env').click(function(event) {
					$.ajax({
						url: 'http://localhost/app_personal/backend/service/postPersonal',
						type: 'POST',
						dataType: 'json',
						data: {
							// id_users: '',
							cpf: '06062285195',
							password: '211540',
							name: 'Algum nome que eu quis CKM',
							birth_date: '2000-03-01',
							Email: 'email.algum@mail.com',
							cel: '(61)22223365',
							cep: '72545-500',
							neighborhood: 'QR 315 H',
							address: 'QUADRA DE SANTA MARIA',
							cref: '22223365',
						},
						success: function(d) {
							console.log(d);
							console.log("success");
						},
					});
				});
		</script>
	</body>

</html>