<?php

include 'conexion.php';

$nom = $_POST['nom'];
$cor = $_POST['cor'];
$usu = $_POST['usu'];
$con = $_POST['con'];
$car = $_POST['car'];

$stmt = $conn->prepare("INSERT INTO usuarios (nombre, correo, usuario, contrasena, cargo) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss",$nom, $cor, $usu, $con, $car);

if($stmt->execute()) {
    header("Location: ../views/menu.php");
    exit;
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();

?>