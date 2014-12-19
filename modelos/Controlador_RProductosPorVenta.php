<?php

class Controlador_RProductosPorVenta{
	private $producto = "";
	private $estadoEnInventario = "";
	private $fechaVenta = "";
	private $cantVendida = "";


	public function crear_RProductosPorVenta( $pro, $estIn, $fecha, $cantV){
		$this->producto = $pro;
		$this->estadoEnInventario = $estIn;
		$this->fechaVenta = $fecha;
		$this->cantVendida = $cantV;
		
		
	}
	
	public function get_producto(){
		return $this->producto;
	}
	
	public function get_estadoEnInventario(){
		return $this->estadoEnInventario;
	}
	
	public function get_fechaVenta(){
		return $this->fechaVenta;
	}

	public function get_cantVendida(){
		return $this->cantVendida;
	}
	
	
	
	public function set_producto($pro){
		$this->producto = $pro;
	}

	public function set_estadoEnInventario($estIn){
		$this->estadoEnInventario = $estIn;
	}
	
	public function set_fechaVenta($fecha){
		$this->fechaVenta = $fecha;
	}

	
	public function set_cantVendida($cantV){
		$this->cantVendida = $cantV;
	}
		
}

?>