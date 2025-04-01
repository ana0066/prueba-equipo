<?php
require 'db.php'; // Asegúrate de incluir la conexión a la base de datos

// Recibir los datos JSON desde el `fetch`
$data = json_decode(file_get_contents("php://input"), true);

// Verificar que los datos existen
if (isset($data['nombre']) && isset($data['valor']) && isset($data['existencia']) && isset($data['urlImagen'])) {
    
    $nombre = $data['nombre'];
    $valor = $data['valor'];
    $existencia = $data['existencia'];
    $urlImagen = $data['urlImagen'];

    // Preparar la consulta SQL
    $sql = "INSERT INTO products (nombre, valor, existencia, urlImagen) VALUES (?, ?, ?, ?)";
    
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sdis", $nombre, $valor, $existencia, $urlImagen);
        
        if ($stmt->execute()) {
            echo json_encode(["success" => true, "message" => "Producto agregado"]);
        } else {
            echo json_encode(["success" => false, "message" => "Error al agregar producto"]);
        }
        
        $stmt->close();
    } else {
        echo json_encode(["success" => false, "message" => "Error en la consulta"]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Datos incompletos"]);
}

$conn->close();
?>
