<?php
	include ("perfil.php"); 
	include_once '../controladores/Controlador_RVentas.php';
	include_once '../modelos/Modelo_RVenta.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>venta</title>
</head>
<body>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Cantidad</th>
			<th>Estado</th>
			<th>Fecha de Venta</th>
		</tr>
	</thead>
		
	<?php
	$modelo = new Modelo_RVentas();
	$controlador = new Controlador_RVentas($modelo);
	$controlador->imprimirFilasProductoPorVenta();
	?>
	
</table>
</body>
</html>