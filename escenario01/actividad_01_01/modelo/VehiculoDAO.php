<?php
require_once 'Conexion.php';

class VehiculoDAO {
    
    public static function obtenerTodos() {
        try {
            $db = Conexion::conectar();
            $stmt = $db->query("SELECT * FROM vehiculos ORDER BY fecha DESC");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Error en la consulta: " . $e->getMessage());
        }
    }
}
