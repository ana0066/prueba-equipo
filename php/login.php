<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['contraseña'])) { // Si usaste password_hash()
            $_SESSION['usuario'] = $user['nombre'];
            $_SESSION['rol'] = $user['rol'];

            header("Location: ../index.php");
            exit();
        } else {
            echo "<p style='color: red;'>Contraseña incorrecta</p>";
        }
    } else {
        echo "<p style='color: red;'>Usuario no encontrado</p>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="../estilos.css">
</head>
<body>

<div class="container">

    <div class="presentacion">
        <h1>Distribuidora Lorenzo</h1>
        <p>Busca los mejores productos para la decoración y buen funcionamiento de tu hogar</p>
    </div>

    <div class="form-container">
        <img src="../img/LOGO.png" class="logo">
        <form action="login.php" method="POST">
            <input type="email" name="email" placeholder="Correo electrónico" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Iniciar Sesión</button>
        </form>
        <a href="register.php">¿No tienes cuenta? Regístrate</a>
    </div>

</div>

</body>
</html>