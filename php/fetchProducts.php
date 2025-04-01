<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Content-Type: application/json');

$conn = new mysqli("localhost", "root", "", "distribuidoral");

if ($conn->connect_error) {
    die(json_encode(["error" => "Error de conexión: " . $conn->connect_error]));
}

$sql = "SELECT id, nombre, valor, existencia, urlImagen FROM products";
$result = $conn->query($sql);

$productos = [];

if ($result) {
    while ($row = $result->fetch_assoc()) {
        $productos[] = $row;
    }
    echo json_encode($productos);
} else {
    echo json_encode(["error" => "Error en la consulta: " . $conn->error]);
}

$conn->close();
