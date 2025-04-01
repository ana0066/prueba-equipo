<?php
function conectarDB() {
    $host = "localhost";
    $user = "root";  // Cambia según tu configuración
    $password = "";  // Cambia según tu configuración
    $dbname = "distribuidoral";

    $conn = new mysqli($host, $user, $password, $dbname);
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
    return $conn;
}
?>
