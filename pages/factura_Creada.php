						<?php
							// incluye el menu y demas cosas contenidas en perfil.php
							include ("perfil.php"); 
							echo"<div class='row'>
									<div class='panel panel-primary'>";
							echo "<div class='contenido'>";
							echo "<br>";

							//Dependiendo del genero muestra "Bienvenido" o "Bienvenida"
							/*echo "id vendedor ".$_REQUEST['id_vende'];
							echo "<br>  id Cliente  ".$_REQUEST['id_cliente'];
							echo "<br> id producto 1 ".$_REQUEST['producto0']."  Cantidad ".$_REQUEST['cantidad0'];
							echo "<br> id producto 2 ".$_REQUEST['producto1']."  Cantidad ".$_REQUEST['cantidad1'];*/
							$tam =  (count($_REQUEST)-2)/2;

							echo "id vendedor ".$_REQUEST['id_vende'];
							echo "<br>  id Cliente  ".$_REQUEST['id_cliente'];

							$p=0;
							for($i = 0 ; $i<$tam; $p++ ){
								if(isset($_REQUEST["producto".$p])){
									echo "<br> id producto ".$p." ".$_REQUEST['producto'.$p]."  Cantidad ".$_REQUEST['cantidad'.$p];
									$i++;
								}

							}

						?>
						

				</div>
			</div>

		</div>
		<script src="../js/jquery.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/npm.js"></script>
	</body>
</html>
