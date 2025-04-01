<?php
header("Content-Type: application/json");
include 'db.php'; // Archivo donde conectamos con la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = json_decode(file_get_contents("php://input"), true);

    if (!isset($data["nombre"], $data["valor"], $data["existencia"], $data["urlImagen"])) {
        echo json_encode(["error" => "Faltan datos"]);
        exit;
    }

    $nombre = $data["nombre"];
    $valor = $data["valor"];
    $existencia = $data["existencia"];
    $urlImagen = $data["urlImagen"];

    $conn = conectarDB();
    $stmt = $conn->prepare("INSERT INTO products (nombre, valor, existencia, urlImagen) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sdisi", $nombre, $valor, $existencia, $urlImagen);

    if ($stmt->execute()) {
        echo json_encode(["message" => "Producto agregado con éxito"]);
    } else {
        echo json_encode(["error" => "Error al agregar producto"]);
    }

    $stmt->close();
    $conn->close();
}
?>
