<?php
include 'conexion.php';

$sql = "SELECT empleado_id, fecha, entrada, salida 
FROM asistencia;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='asistencia-data-table'>
            <thead>
                <tr>
                    <th>Empleado ID</th>
                    <th>Fecha</th>
                    <th>Entrada</th>
                    <th>Salida</th>
                </tr>
            </thead>
            <tbody>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['empleado_id'] . "</td>
                <td>" . $row['fecha'] . "</td>
                <td>" . $row['entrada'] . "</td>
                <td>" . $row['salida'] . "</td>
              </tr>";
    }
    echo "</tbody></table>";
} else {
    echo "No se encontraron registros de asistencia.";
}

$conn->close();
?>
