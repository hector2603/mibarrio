<?php
include_once 'Modelo_Bd.php';

class Modelo_RVentas{
	private $bd;		// Tipo: BD
	private $tamVentas;	// Tipo: int

	public function __construct(){
		$this->bd = new BD("base1","root");
		$tamVentas = 0;
	}

	public function getVentas(){
		// Abrir la conexion
		$this->bd->conectar();
		$sql = "SELECT count(Idfactura) AS num,fechaventa FROM factura WHERE estado='Registrada' group by fechaventa;";

		// Recibe el resultset de la consulta
		$resultset = $this->bd->consultar($sql);

		$salida[0][0] = "";
		$i = 0;
		while($reg=mysql_fetch_array($resultset)){
			$salida[$i][0] = $reg['num'];
			$salida[$i][1] = $reg['fechaventa'];
			$i++;
			$this->tamVentas++;
		}

		// Cerrar la conexion
		$this->bd->desconectar();

		return $salida;
	}

	public function getProductoPorVenta(){
		// Abrir la conexion
		$this->bd->conectar();
		$sql = "SELECT COUNT(*) AS num FROM factura WHERE estado='Registrada' group by fechaventa;";

		// Recibe el resultset de la consulta
		$resultset = $this->bd->consultar($sql);

		$salida[0][0] = "";
		$i = 0;
		while($reg=mysql_fetch_array($resultset)){
			$salida[$i][0] = $reg['nombre'];
			$salida[$i][1] = $reg['cantidadProducto'];
			$salida[$i][2] = $reg['estado'];
			$salida[$i][3] = $reg['fechaventa'];
			$i++;
		}

		// Cerrar la conexion
		$this->bd->desconectar();

		return $salida;
	}

	public function getTamProductoPorVenta(){
		// Abrir la conexion
		$this->bd->conectar();
		$sql = "SELECT COUNT(*) AS num from productos, factura, listaproductos where productos.id=listaproductos.IdProducto and factura.Idfactura=listaproductos.Idfactura and factura.estado='Registrada' ;";

		// Recibe el resultset de la consulta
		$resultset = $this->bd->consultar($sql);

		$salida = 0;
		if($reg=mysql_fetch_array($resultset)){
			$salida = $reg['num'];
		}

		// Cerrar la conexion
		$this->bd->desconectar();

		return $salida;
	}

	public function getTamVentas(){
		return $this->tamVentas;
	}
}

?>
