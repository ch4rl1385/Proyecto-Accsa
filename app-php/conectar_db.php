<?php
$servername = "db-mysql"; // Reemplaza con el nombre de tu servidor (ej. "localhost")
$username = "charlie";   // Reemplaza con tu nombre de usuario de la base de datos
$password = "redhat"; // Reemplaza con tu contraseña
$dbname = "usuarios";   // Reemplaza con el nombre de tu base de datos

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

echo "Conexión exitosa a la base de datos MySQL!";

$conn->close(); // Cierra la conexión
?>