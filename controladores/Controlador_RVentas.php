<?php
require_once('Controlador_reportes.php');
class Controlador_RVentas{
	private $numeroVentas = "";
	private $totalVentas = "";
	private $fechaVentas = "";


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
