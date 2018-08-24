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

			<?php echo "<pre>"; ?>
			<?php print_r($objeto) ?>
			<?php echo "</pre>"; ?>

			<a href="<?php echo $this->url(); ?>"><button>Voltar</button></a>

		</div>

	</body>

</html>