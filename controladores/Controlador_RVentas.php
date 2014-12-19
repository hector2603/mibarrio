<?php

include_once '../modelos/Modelo_RVenta.php';

class Controlador_RVentas{
	private $numeroVentas = "";
	private $totalVentas = "";
	private $fechaVentas = "";
	private $RVenta;	// Tipo: Modelo_RVenta

	public function __construct($modelo_rventa){
		$this->RVenta = $modelo_rventa;
	}


	public function crear_RVentas( $numv, $totv, $fecha){
		$this->numeroVentas = $numv;
		$this->totalVentas = $totv;
		$this->fechaVentas = $fecha;
		
		
	}
	
	public function get_numeroVentas(){
		return $this->numeroVentas;
	}
	
	public function get_totalVentas(){
		return $this->totalVentas;
	}
	
	public function get_fechaVentas(){
		return $this->fechaVentas;
	}

	public function imprimirFilasProductoPorVenta(){
		$matriz = $this->RVenta->getProductoPorVenta();
		for ($i=0; $i < $this->RVenta->getTamProductoPorVenta(); $i++) { 
			echo "<tr>
					<td>".$matriz[$i][0]."</td>
					<td>".$matriz[$i][1]."</td>
					<td>".$matriz[$i][2]."</td>
					<td>".$matriz[$i][3]."</td>
				</tr>";
		}
	}
	
	
	
	public function set_numeroVentas($numv){
		$this->numeroVentas = $numv;
	}

	public function set_totalVentas($totv){
		$this->totalVentas = $totv;
	}
	
	public function set_fechaVentas($fecha){
		$this->fechaVentas = $fecha;
	}
		
}

?>
