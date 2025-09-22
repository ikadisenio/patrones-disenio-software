<?php
require_once 'Conexion.php';

class ActivoFijoDAO {
    public static function guardar(IActivoFijo $activo) {
        $db = Conexion::conectar();
        $datos = $activo->getDatos();

        $stmt = $db->prepare("INSERT INTO activos (codigo, nombre, precio, marca, modelo, color, ubicacion, responsable)
                              VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([
            $datos['codigo'],
            $datos['nombre'],
            $datos['precio'],
            $datos['marca'],
            $datos['modelo'],
            $datos['color'],
            $datos['ubicacion'],
            $datos['responsable']
        ]);
    }

    public static function obtenerTodos(): array {
        $db = Conexion::conectar();
        $stmt = $db->query("SELECT * FROM activos ORDER BY codigo ASC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>