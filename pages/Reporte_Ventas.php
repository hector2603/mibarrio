<?php
	include ("perfil.php"); 
	include_once '../controladores/Controlador_RProductosPorVenta.php';
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
			<th>Fecha</th>
			<th>Cantidad de Ventas</th>
		</tr>
	</thead>
		
	<?php
	$modelo = new Modelo_RVentas();
	$controlador = new Controlador_RProductosPorVenta($modelo);
	$controlador->imprimirFilasPorVenta();
	?>
	
</table>
</body>
</html>