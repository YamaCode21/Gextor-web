<?php
$servername = "localhost";
$username = "root";
$password = "root2024";
$database = "db_trabajadores";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Conexion fallida" . $conn->connect_error);
}

?>