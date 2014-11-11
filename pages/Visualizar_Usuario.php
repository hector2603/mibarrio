<?php

  include ("perfil.php"); 

  $numero_error=$_REQUEST['gestion'];
  $c_producto2 = new Controlador_Usuario();
  $m_usuario2 = new Modelo_Usuario($c_producto2);
echo"<div class='row'>";
  if($c_perfil->get_PermisoSistema()){

    $m_usuario2->buscar_Usuario2($numero_error);
    //echo 'SI tengo permisos root<br>';
    $c_producto2 = $m_usuario2->getControladorUsuario();
  }else {
  	$c_producto2 = $c_usuario;
    //echo 'NO tengo permisos root<br>';
  }


		$nameUS = $c_producto2->get_Nombres();
		$idUS = $c_producto2->get_Nid();
		echo "

		<div class=' well col-lg-4'>
			<div class='row'>
				<span class=''>Usuario: ".$nameUS."</span>
			</div>	";
					 echo "

<br>
					  	 <a class='btn btn-primary' href='Modificar_Usuario.php?gestion=".$idUS."'><div class='links2 links2-submit'>
						 <b>Modificar Datos</b></div></a>
					  

					  	<a class='btn btn-primary' href='Modificar_Contra_Usuario.php?gestion=".$idUS."'><div class='links2 links2-submit'>
						<b>Cambiar Contrase&ntilde;a</b></div></a>

		</div>";
?>