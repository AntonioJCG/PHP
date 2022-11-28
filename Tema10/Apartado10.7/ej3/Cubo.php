<?php
class Cubo
{
    private $nombre;
    private $capacidad;
    private $contenido;

    public function __construct($nom, $cap, $cont)
    {
        $this->nombre = $nom;
        $this->capacidad = $cap;
        $this->contenido = $cont;
    }

    public function getCapacidad()
    {
        return $this->capacidad;
    }

    public function setCapacidad($capacidad)
    {
        $this->capacidad = $capacidad;

        return $this;
    }

    public function getContenido()
    {
        return $this->contenido;
    }

    public function setContenido($contenido)
    {
        $this->contenido = $contenido;

        return $this;
    }

    public function verter($litros, $cuboDestino)
    {
        $capacidadLibre = ($cuboDestino->getCapacidad()) - ($cuboDestino->getContenido());

        if ($this->contenido < $litros) {
            return "No tienes suficientes litros para verter.<br>";
        } else {
            if ($capacidadLibre >= $litros) {
                $cuboDestino->setContenido($cuboDestino->getContenido() + $litros);
                $this->contenido -= $litros;
            } else {
                $sobra = $litros - $capacidadLibre;
                $cuboDestino->setContenido($cuboDestino->getContenido() + $litros - $sobra);
                $this->contenido -= $capacidadLibre;
            }
            return "Vertido con éxito.<br>";
        }
    }

    public function __toString() {
        return "<hr>Nombre: $this->nombre  <br>Capacidad: $this->capacidad <br>Contenido: $this->contenido <hr>";
    }
}
