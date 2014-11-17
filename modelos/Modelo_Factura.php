<?php
include_once 'Modelo_Bd.php';
include_once 'Validacion_Datos.php';

class Modelo_Factura{
	private $bd;		// Tipo: BD
	private $factura;	// Tipo: Controlador_Factura
	
	public function __construct($control_Factura){
		$this->bd = new BD("base1","root");
		$this->bd->conectar();
		$this->factura = $control_Factura;
	}
	
	// Void: Buscar los datos de la Factura 
	public function buscar_Factura($id_factura){
		$sql = "";
		$registros = $this->bd->consultar($sql);
		if($reg=mysql_fetch_array($registros)){
		}
	}

	

	
	
	public function actualizar_Factura($id_Factura){

		$sql = "INSERT INTO 
				`factura`( `fechaventa`, `Idvendedor`, `Idcliente`, `IVAtotalfactura`, `montototalsinIVA`, `montototalconIVA`, `estado`) 
				VALUES 
			   ("  .$this->factura->get_FechaVenta() .
				",".$this->factura->get_idVendedor() .
				",".$this->factura->get_idCliente() .
				",".$this->factura->get_iva() .
				",".$this->factura->get_montosinIva() .
				",".$this->factura->get_montoconIva() .
				",".$this->factura->get_Estado() .
				")";

		return $salida;
	}
	
	
	public function crear_Factura(){
			$sql = "INSERT INTO 
				`factura`( `Idfactura`,`fechaventa`, `Idvendedor`, `Idcliente`, `IVAtotalfactura`, `montototalsinIVA`, `montototalconIVA`, `estado`) 
				VALUES 
			   ('".$this->factura->get_idFactura() .
			   	"','".$this->factura->get_FechaVenta() .
			   	"','".$this->factura->get_idVendedor() .
				"','".$this->factura->get_idCliente() .
				"','".$this->factura->get_iva() .
				"','".$this->factura->get_montosinIva() .
				"','".$this->factura->get_montoconIva() .
				"','".$this->factura->get_Estado() .
				"')";
			if($this->bd->insertar($sql))
				$salida = 1;
			else $salida = 31;
			$productos =$this->factura->get_Productos();
			$nummero_de_productos = count($this->factura->get_Productos());

			$sql = "INSERT INTO `listaproductos`(`Idfactura`, `IdProducto`, `cantidadProducto`) VALUES ";
			for($i = 0 ; $i<$nummero_de_productos ; $i++){
				if($i<$nummero_de_productos-1)
				 $sql.="('".$this->factura->get_idFactura()."','".$productos[$i][0]."','".$productos[$i][1]."'),";
				else
					$sql.="('".$this->factura->get_idFactura()."','".$productos[$i][0]."','".$productos[$i][1]."')";


			}
			if($this->bd->insertar($sql))
				$salida = 1;
			else $salida = 31;


		return $salida;
	}
	

	public function desconectarBD(){
		$this->bd->desconectar();
	}

	public function mostrar_Todos(){

		$sql = "select * from Factura";

		$registros = $this->bd->consultar($sql);

	    for($i = 0; $row = mysql_fetch_row($registros); $i++){

	        for($j = 0; $j < 16; $j++){
	            
	            $ar[$i][$j] = $row[$j];

	        }
	    }

	    return $ar;
	}
	public function getControladorFactura(){
		return $this->factura;
	}

	public function getNumeroFacturas(){
		$sql = "SELECT count(*) FROM `factura`";
		$row = mysql_fetch_array($this->bd->consultar($sql));
		return $row["count(*)"];

	}
	
}

?>
