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
	<div class="panel panel-primary">
    <div class='panel-heading'>
    	<h2 class='panel-title text-center'>Productos Por Venta</h2>
    </div>
    <div class=' panel-body'>
<?php
if(isset($_REQUEST['fecha1']) AND isset($_REQUEST['fecha2']))
	echo "<p> Mostrar entre las fechas <i>" . $_REQUEST['fecha1'] . "</i> y <i>" .$_REQUEST['fecha2']. "</i></p><br>";
?>
		<div id="tabla" class='row table-responsive' >
			<table border=1 class='table table-striped table-hover table-condensed'>
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
		<form action="../script/pdf_reportes.php">
    		<input type='text' id='codigo' name="codigohtml" class='form-control hide'/>
			<button class='btn btn-primary' type='submit' >Imprimir  <i class="fa fa-print"></i></i></button>

		</form>
	</div>
  </div>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/npm.js"></script>
<script type="text/javascript">


$(document).ready(function(){

	var html = $("#tabla").html();

	$("#codigo").val(html);


	});


</script>
</body>
</html>