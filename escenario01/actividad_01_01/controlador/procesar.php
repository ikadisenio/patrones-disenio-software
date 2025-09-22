<?php
require_once '../modelo/VehiculoFactory.php';

$tipo   = $_POST['tipo'];
$marca  = $_POST['marca'];
$modelo = $_POST['modelo'];
$anio   = $_POST['anio'];
$fecha  = date('Y-m-d h:i:s');

try {
    $vehiculo = VehiculoFactory::crearVehiculo($tipo, $marca, $modelo, $anio, $fecha);
    VehiculoFactory::guardarVehiculo($tipo, $vehiculo);
    //echo "Vehículo registrado. Matrícula: $" . $vehiculo->calcularMatricula();
    header("Location: ../controlador/interfaz.php");
    exit;
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>