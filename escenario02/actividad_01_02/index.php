<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'modelo/ActivoFijoDAO.php';
$activos = ActivoFijoDAO::obtenerTodos();
include 'vista/interfaz.php';
