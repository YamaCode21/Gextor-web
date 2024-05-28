<?php
// Conexión a la base de datos y lógica para obtener los datos del usuario según el ID recibido
include '../php/conexion.php';

// Verificar si se recibió un ID de usuario válido
if(isset($_GET['id']) && !empty($_GET['id'])) {
    // Sanitizar el ID del usuario
    $idUsuario = $_GET['id'];

    // Consulta SQL para obtener los datos del usuario según el ID
    $sql = "SELECT id, nombre, correo, usuario, contrasena FROM usuarios WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $idUsuario);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verificar si se encontraron datos del usuario
    if($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();
    } else {
        // No se encontraron datos del usuario con el ID proporcionado
        echo "No se encontraron datos del usuario con el ID proporcionado.";
        exit(); // Detener la ejecución del script
    }

    // Cerrar la declaración preparada y la conexión
    $stmt->close();
    $conn->close();
} else {
    // No se recibió un ID de usuario válido
    echo "ID de usuario no válido.";
    exit(); // Detener la ejecución del script
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link href="../css/editar.css" rel="stylesheet">
</head>
<body>
    <h2>Editar Usuario</h2>
    <form action="../php/guardar_editar_usuario.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo $usuario['nombre']; ?>">
        </div>
        <div>
            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" value="<?php echo $usuario['correo']; ?>">
        </div>
        <div>
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" value="<?php echo $usuario['usuario']; ?>">
        </div>
        <div>
            <label for="contrasena">Contraseña:</label>
            <input type="text" id="contrasena" name="contrasena" value="<?php echo $usuario['contrasena']; ?>">
        </div>
        <button type="submit">Guardar Cambios</button>
    </form>
</body>
</html>
