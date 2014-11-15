<?php
//controlador factura
	class Controlador_Factura
	{
		private $idCliente;
		private $idVendedor;
		private $idFactura;
		private $fechaVenta;
		private $iva; 
		private $montoconIva;
		private $montosinIva;
		}


	public function get_idCliente(){
		return $this->idCliente;
	}
	
	public function get_idVendedor(){
		return $this->idVendedor;
	}
	
	public function get_idFactura(){
		return $this->idFactura;
	}
	
	public function get_FechaVenta(){
		return $this->fechaVenta;
	}

	public function get_iva(){
		return $this->iva;
	}

	public function get_montoconIva(){
		return $this->montoconIva;
	}

	public function get_montosinIva(){
		return $this->montosinIva;
	}


	public function set_idCliente($idCliente){
		$this->idCliente = $idCliente;
	}

	public function set_idVendedor($idVendedor){
		$this->idVendedor = $idVendedor;
	}

	public function set_idFactura($idFactura){
		$this->idFactura = $idFactura;
	}
	
	public function set_fechaVenta($fechaVenta){
		$this->fechaVentana = $fechaVenta;
	}
	
	public function set_idiva($iva){
		$this->iva = $iva;
	}

	public function set_montoconIva($montoconIva){
		$this->montoconIva = $montoconIva;
	}

	public function set_montosinIva($montosinIva){
		$this->montosinIva = $montosinIva;
	}
	


?>