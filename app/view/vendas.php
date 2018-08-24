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

			<table style="width: 100%">
					<tr>
						<th>#</th>
						<th>produtos</th>
						<th>data</th>
						<th>total</th>
						<th>pessoa</th>
					</tr>

			<?php 
				foreach ($vendas as $venda) {
			 ?>
					<tr>
						<td><?php echo $venda->id; ?></td>
						<td><?php echo $venda->produtos; ?></td>
						<td><?php echo DateHelper::dateFormat($venda->data_compra); ?></td>
						<td><?php echo $venda->total; ?></td>
						<td><?php echo $venda->pessoa_id; ?></td>
					</tr>	
			<?php 
				}
			 ?>
				</table>

		</div>

	</body>

</html>