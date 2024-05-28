<?php
include 'conexion.php';

$sql = "SELECT id, cargo
FROM usuarios;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='asistencia-data-table'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cargo</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['cargo'] . "</td>
                <td style='display: flex; justify-content: center;'><a href='../views/editar_cargo.php?id=" . $row['id'] . "'>✏️</a></td>
              </tr>";
    }
    echo "</tbody></table>";
} else {
    echo "No se encontraron registros de usuarios.";
}

$conn->close();
?>