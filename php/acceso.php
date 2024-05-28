<?php
$servername = "localhost";
$username = "root";
$password = "root2024";
$database = "db_trabajadores";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Conexion fallida" . $conn->connect_error);
}

$user = $_POST['username'];
$contrasena = $_POST['contrasena'];
$sql = "select * from usuarios where usuario='$user' and contrasena='$contrasena'";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
  header("Location: ../views/menu.php");
  exit;
} 

else {
  header("Location: ../index.php?error=credenciales");
  exit;
}

$conn -> close();

?>