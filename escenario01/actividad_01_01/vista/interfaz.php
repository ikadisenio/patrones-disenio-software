<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>G03-01 :: Gestión de Vehículos</title>
    <link rel="stylesheet" href="/Posgrado/actividad_01_01/vista/estilos.css">
</head>
<body>
    <div class="contenedor">
        <div class="columna izquierda">
            <h2>Registrar Vehículo</h2>
            <form method="POST" action="/Posgrado/actividad_01_01/controlador/procesar.php">

                <label>Tipo:</label>
                <select name="tipo">
                    <option value="auto">Auto</option>
                    <option value="camioneta">Camioneta</option>
                    <option value="camion">Camión</option>
                </select>

                <label>Marca:</label>
                <input type="text" name="marca" required>

                <label>Modelo:</label>
                <input type="text" name="modelo" required>

                <label>Año:</label>
                <input type="number" name="anio" required>

                <button type="submit">Registrar</button>
            </form>
        </div>

        <div class="columna derecha">
            <h2>Vehículos Registrados</h2>
            
                <table>
                    <thead>
                        <tr>
                            <th>Tipo</th><th>Marca</th><th>Modelo</th><th>Año</th><th>Matrícula</th><th>Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($vehiculos as $v): ?>
                        <tr>
                            <td><?= ucfirst($v['tipo']) ?></td>
                            <td><?= $v['marca'] ?></td>
                            <td><?= $v['modelo'] ?></td>
                            <td><?= $v['anio'] ?></td>
                            <td>$<?= $v['matricula'] ?></td>
                            <td><?= date('d/m/Y', strtotime($v['fecha'])) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            

        </div>
    </div>
</body>
</html>
