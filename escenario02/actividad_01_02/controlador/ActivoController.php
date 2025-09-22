<?php
require_once __DIR__ . '/../modelo/ActivoFijoBuilder.php';
require_once __DIR__ . '/../modelo/ActivoFijo.php';
require_once __DIR__ . '/../modelo/ActivoFijoDAO.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $builder = new ActivoFijoBuilder($_POST['codigo'], $_POST['nombre'], floatval($_POST['precio']));

    if (!empty($_POST['marca']))       $builder->setMarca($_POST['marca']);
    if (!empty($_POST['modelo']))      $builder->setModelo($_POST['modelo']);
    if (!empty($_POST['color']))       $builder->setColor($_POST['color']);
    if (!empty($_POST['ubicacion']))   $builder->setUbicacion($_POST['ubicacion']);
    if (!empty($_POST['responsable'])) $builder->setResponsable($_POST['responsable']);

    $activo = $builder->build();
    ActivoFijoDAO::guardar($activo);

    header("Location: ../index.php?exito=1");
    exit;
}
 ?>