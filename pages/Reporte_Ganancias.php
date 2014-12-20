<?php
	include ("perfil.php"); 
	include_once '../controladores/Controlador_RGanancias.php';
	include_once '../modelos/Modelo_RGanancias.php';
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
			<th>Idfactura</th>
			<th>Valor_total</th>
			<th>Ganancia</th>
			<th>Fecha</th>
		</tr>
	</thead>
		
	<?php
	$modelo = new Modelo_RGanancias();
	$controlador = new Controlador_RGanancias($modelo);
	if(isset($_REQUEST['fecha1']) AND isset($_REQUEST['fecha2']))
		$controlador->imprimirFilasGananciasPorFecha($_REQUEST['fecha1'],$_REQUEST['fecha2']);
	else
		$controlador->imprimirFilasGanancias();
	?>
	
</table>
</div>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/npm.js"></script>
</body>
</html>