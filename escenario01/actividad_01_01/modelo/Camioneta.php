<?php
//Camioneta
require_once 'Vehiculo.php';
class Camioneta extends Vehiculo {
    public function calcularMatricula() {
        return 100 + ($this->anio < 2020 ? 35 : 63);
    }
}
?>