<?php
include_once 'Modelo_RVenta.php';

class Modelo_RCliente{
		private $bd;		// Tipo: BD
		private $RVenta;	// Tipo: Controlador_Usuario

			public function __construct($control_RVenta){
		$this->bd = new BD("base1","root");
		$this->bd->conectar();
		$this->RVenta = $control_RVenta;
	}

	public function getclienteporcompra(){
		// Abrir la conexion
		$this->con->concetar();
		$sql = "select productos.nombre, listaproductos.cantidadProducto,  productos.estado, factura.fechaventa from productos, factura, listaproductos where productos.id=listaproductos.IdProducto and factura.Idfactura=listaproductos.Idfactura and factura.estado='Registrada' ;";

		// Recibe el resultset de la consulta
		$resultset = $this->con->consultar($sql);

		$salida[0][0] = "";
		$i = 0;
		while($reg=pg_fetch_array($resultset)){
			$salida[$i][0] = $reg['productos.nombre'];
			$salida[$i][1] = $reg['listaproductos.cantidadProducto'];
			$salida[$i][2] = $reg['productos.estado'];
			$salida[$i][3] = $reg['factura.fechaventa'];
			$i++;
		}

// Cerrar la conexion
		$this->con->desconectar();

		return $salida;
	}

}