<?php
include 'conexion.php';


$id_empleado = $_POST['emp'];
$fecha = $_POST['fec'];
$entrada = $_POST['ent'];
$salida = $_POST['sal'];

$stmt = $conn->prepare("INSERT INTO asistencia (empleado_id, fecha, entrada, salida) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $id_empleado, $fecha, $entrada, $salida);

if ($stmt->execute()) {
    header("Location: ../views/menu.php");
    exit;
} else {
    echo "Error: " . $stmt->error;
}

// Cerrar la conexión y el statement
$stmt->close();
$conn->close();
?>