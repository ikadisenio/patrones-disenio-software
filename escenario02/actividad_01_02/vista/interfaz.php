<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>G03-02 :: Gestión de Activos Fijos</title>
    <link rel="stylesheet" href="/Posgrado/actividad_01_02/vista/estilos.css">
</head>
<body>
    <div class="contenedor">
        <div class="columna">
            <h2>Registrar Activo Fijo</h2>
            
            <form method="POST" action="/Posgrado/actividad_01_02/controlador/ActivoController.php">

                <label>Código:</label>
                <input type="text" name="codigo" required>

                <label>Nombre:</label>
                <input type="text" name="nombre" required>

                <label>Precio:</label>
                <input type="number" step="0.01" name="precio" required>

                <label>Marca:</label>
                <input type="text" name="marca">

                <label>Modelo:</label>
                <input type="text" name="modelo">

                <label>Color:</label>
                <input type="text" name="color">

                <label>Ubicación:</label>
                <input type="text" name="ubicacion">

                <label>Responsable:</label>
                <input type="text" name="responsable">

                <button type="submit">Registrar</button>
            </form>
        </div>

        <div class="columna">
            <h2>Activos Registrados</h2>

            <?php if (!empty($activos)): ?>
                <table>
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Color</th>
                            <th>Ubicación</th>
                            <th>Responsable</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($activos as $a): ?>
                        <tr>
                            <td><?= htmlspecialchars($a['codigo']) ?></td>
                            <td><?= htmlspecialchars($a['nombre']) ?></td>
                            <td>$<?= number_format($a['precio'], 2) ?></td>
                            <td><?= htmlspecialchars($a['marca']) ?></td>
                            <td><?= htmlspecialchars($a['modelo']) ?></td>
                            <td><?= htmlspecialchars($a['color']??"") ?></td>
                            <td><?= htmlspecialchars($a['ubicacion']??"") ?></td>
                            <td><?= htmlspecialchars($a['responsable']??"") ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>No se han registrado activos.</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
