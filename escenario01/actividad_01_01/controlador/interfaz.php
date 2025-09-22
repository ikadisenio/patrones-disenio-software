<?php
require_once __DIR__ . '/../modelo/VehiculoDAO.php';
$vehiculos = VehiculoDAO::obtenerTodos();
include __DIR__ . '/../vista/interfaz.php';
?>