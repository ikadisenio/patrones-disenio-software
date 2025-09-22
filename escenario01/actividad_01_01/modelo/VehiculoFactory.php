<?php
require_once 'Auto.php';
require_once 'Camioneta.php';
require_once 'Camion.php';
require_once 'Conexion.php';

class VehiculoFactory {
    public static function crearVehiculo($tipo, $marca, $modelo, $anio, $fecha) {
        switch (strtolower($tipo)) {
            case 'auto': 
                return new Auto($marca, $modelo, $anio, $fecha);
            case 'camioneta': 
                return new Camioneta($marca, $modelo, $anio, $fecha);
            case 'camion': 
                return new Camion($marca, $modelo, $anio, $fecha);
            default: 
                throw new Exception("Tipo de vehículo no válido");
        }
    }

    public static function guardarVehiculo($tipo, $vehiculo) {
        $db = Conexion::conectar();
        $stmt = $db->prepare("INSERT INTO vehiculos (tipo, marca, modelo, anio, matricula, fecha) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([
            $tipo,
            $vehiculo->getMarca(),
            $vehiculo->getmodelo(),
            $vehiculo->getanio(),
            $vehiculo->calcularMatricula(),
            $vehiculo->getFecha()
        ]);
    }
}

?>
