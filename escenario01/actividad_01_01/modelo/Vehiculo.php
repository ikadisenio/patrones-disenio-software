<?php

abstract class Vehiculo {
    protected $marca;
    protected $modelo;
    protected $anio;
    protected $fecha;

    public function __construct($marca, $modelo, $anio, $fecha) {
        $this->marca  = $marca;
        $this->modelo = $modelo;
        $this->anio   = $anio;
        $this->fecha  = $fecha;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getAnio() {
        return $this->anio;
    }

    public function getFecha() {
       return $this->fecha;
    }
    
    abstract public function calcularMatricula();
}

?>
