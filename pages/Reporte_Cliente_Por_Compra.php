<?php
	include ("perfil.php"); 
	include_once '../controladores/Controlador_RCompra.php';
	include_once '../modelos/Modelo_RCompra.php';
	

	if(isset($_REQUEST['fecha1']) AND isset($_REQUEST['fecha2']))
		echo "<p> Mostrar entre las fechas <i>" . $_REQUEST['fecha1'] . "</i> y <i>" .$_REQUEST['fecha2']. "</i></p><br>";
?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Cliente</th>
			<th>Cantidad de compra</th>
			<th>Fecha</th>
		</tr>
	</thead>
		
	<?php
	$modelo = new Modelo_RCompra();
	$controlador = new Controlador_RCompra($modelo);
	if(isset($_REQUEST['fecha1']) AND isset($_REQUEST['fecha2']))
		$controlador->imprimirFilasClientesPorCompraPorFecha($_REQUEST['fecha1'],$_REQUEST['fecha2']);
	else
		$controlador->imprimirFilasClientesPorCompra();
	?>
	
</table>
</div>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/npm.js"></script>
</body>
</html>