<?php
include 'conexion.php';

if(isset($_POST['id']) && !empty($_POST['id'])) {
    $idUsuario = $_POST['id'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $sql = "UPDATE usuarios SET nombre=?, correo=?, usuario=?, contrasena=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $nombre, $correo, $usuario, $contrasena, $idUsuario);

    if($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Usuario actualizado correctamente.']);
        header("Location: ../views/menu.php");
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error al actualizar el usuario.']);
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode(['status' => 'error', 'message' => 'ID de usuario no válido.']);
}
?>
