<?php
class Empleado {
    private $nombre;
    private $sueldo;

    public function __construct($nom, $sue) {
        $this->nombre = $nom;
        $this->sueldo = $sue;
    }

    public function asigna($nom, $sue) {
        if ($this->nombre = $nom) {
            $this->sueldo = $sue;
        }
    }

    public function impuestos() {
        if ($this->sueldo > 3000) {
            return "El trabajador $this->nombre debe pagar impuestos.<br>";
        } else {
            return "El trabajador $this->nombre no debe pagar impuestos.<br>";
        }
    }

    public function __toString() {
        return "Nombre: $this->nombre , Sueldo: $this->sueldo <br>";
    }
}
?>