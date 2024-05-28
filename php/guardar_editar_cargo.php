<?php
include 'conexion.php';

if(isset($_POST['id']) && !empty($_POST['id']) && isset($_POST['cargo']) && !empty($_POST['cargo'])) {
    $idUsuario = $_POST['id'];
    $cargo = $_POST['cargo'];

    $sql = "UPDATE usuarios SET cargo=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $cargo, $idUsuario);

    if($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Cargo del usuario actualizado correctamente.']);
        header("Location: ../views/menu.php");
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error al actualizar el cargo del usuario.']);
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode(['status' => 'error', 'message' => 'ID de usuario o cargo no válido.']);
}
?>