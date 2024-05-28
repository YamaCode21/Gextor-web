<?php
include 'conexion.php';

$sql = "SELECT id, nombre, correo, usuario, contrasena
FROM usuarios;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='asistencia-data-table'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Usuario</th>
                    <th>Contrasena</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['nombre'] . "</td>
                <td>" . $row['correo'] . "</td>
                <td>" . $row['usuario'] . "</td>
                <td>" . $row['contrasena'] . "</td>
                <td style='display: flex; justify-content: space-around;'><a href='../views/editar_usuario.php?id=" . $row['id'] . "'>✏️</a> <a href='#' class='eliminar' data-id='" . $row['id'] . "'>🗑️</a></td>
              </tr>";
    }
    echo "</tbody></table>";
} else {
    echo "No se encontraron registros de usuarios.";
}

$conn->close();
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('.eliminar').click(function(e) {
        e.preventDefault(); // Evita el comportamiento predeterminado del enlace
        var idUsuario = $(this).data('id');

        if (confirm("¿Estás seguro de que deseas eliminar este usuario?")) {
            $.ajax({
                url: '../php/eliminar_usuario.php', // Archivo PHP que maneja la eliminación del usuario
                method: 'POST',
                data: {id: idUsuario},
                success: function(response) {
                    // Actualizar la tabla de usuarios después de eliminar el usuario
                    alert("Usuario eliminado correctamente.");
                    window.location.reload();
                    // Aquí puedes recargar la página o actualizar la tabla de usuarios sin recargar la página
                },
                error: function(xhr, status, error) {
                    alert("Error al eliminar el usuario.");
                }
            });
        }
    });
});

</script>
