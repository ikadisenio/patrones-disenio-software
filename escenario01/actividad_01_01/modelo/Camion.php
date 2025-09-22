<?php
//Camion
require_once 'Vehiculo.php';
class Camion extends Vehiculo {
    public function calcularMatricula() {
        return 100 + ($this->anio < 2020 ? 75 : 95);
    }
}
?>