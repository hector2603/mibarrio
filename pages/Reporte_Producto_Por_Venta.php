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
<?php
if(isset($_REQUEST['fecha1']) AND isset($_REQUEST['fecha2']))
	echo "<p> Mostrar entre las fechas <i>" . $_REQUEST['fecha1'] . "</i> y <i>" .$_REQUEST['fecha2']. "</i></p><br>";
?>
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
	
	if(isset($_REQUEST['fecha1']) AND isset($_REQUEST['fecha2']))
		$controlador->imprimirFilasProductoPorVentaPorFecha($_REQUEST['fecha1'],$_REQUEST['fecha2']);
	else
		$controlador->imprimirFilasProductoPorVenta();
	?>
	
</table>
</div>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/npm.js"></script>
</body>
</html>