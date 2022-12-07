<?php
	if (session_status() == PHP_SESSION_NONE) session_start();
	if (!isset($_SESSION['ingreso'])) {
		$_SESSION['ingreso']=0;
	}
	class Zona {
		public static function getIngreso() {
			return $_SESSION['ingreso'];
		}
		public static function ingresar($ingreso) {
			$_SESSION['ingreso']+=$ingreso;
		}
		private $nombre;
		private $entradasTotales;
		private $entradasDisponibles;
		private $precioEntrada;

		public function __construct($nombre, $entradasTotales, $precioEntrada) {
			$this->nombre=$nombre;
			$this->entradasTotales = $entradasTotales;
			$this->entradasDisponibles = $entradasTotales;
			$this->precioEntrada = $precioEntrada;
		}

		public function getentradasDisponibles() {
			return $this->entradasDisponibles;
		}
		public function getEntradasVendidas() {
			return $this->entradasTotales - $this->entradasDisponibles;
		}
		public function getPrecioEntrada() {
			return $this->precioEntrada;
		}
		public function getNombre()
		{
			return $this->nombre;
		}

		public function venderEntradas($ventas) {
			if ($ventas <= $this->entradasDisponibles) {
				$this->entradasDisponibles -= $ventas;
				Zona::ingresar($ventas*$this->precioEntrada);
				return true;
			} else {
				return false;
			}
		}
	}
 ?>