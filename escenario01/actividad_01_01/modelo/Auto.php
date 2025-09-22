<?php
//AUTO
require_once 'Vehiculo.php';
class Auto extends Vehiculo {
    public function calcularMatricula() {
        return 100 + ($this->anio < 2020 ? 20 : 50);
    }
}
?>