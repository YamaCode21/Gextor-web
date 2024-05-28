<?php
include 'conexion.php';

// Verifica si se recibió un ID de usuario válido
if(isset($_POST['id']) && !empty($_POST['id'])) {
    // Sanitiza el ID del usuario
    $idUsuario = $_POST['id'];

    // Prepara la consulta SQL para eliminar el usuario
    $sql = "DELETE FROM usuarios WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $idUsuario);

    // Ejecuta la consulta
    if($stmt->execute()) {
        // La eliminación fue exitosa
        echo json_encode(['status' => 'success', 'message' => 'Usuario eliminado correctamente.']);
    } else {
        // Error al ejecutar la consulta
        echo json_encode(['status' => 'error', 'message' => 'Error al eliminar el usuario.']);
    }

    // Cierra la conexión y la declaración preparada
    $stmt->close();
    $conn->close();
} else {
    // No se recibió un ID de usuario válido
    echo json_encode(['status' => 'error', 'message' => 'ID de usuario no válido.']);
}
?>


