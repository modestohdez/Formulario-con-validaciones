<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'];
    $password = $_POST['password'];
    $edad = $_POST['edad'];
    $errores = [];

    if (empty($user) || empty($password) || empty($edad)) {
        $errores[] = "Los campos son obligatorios.";
    }

    if (!is_numeric($edad) || $edad < 18) {
        $errores[] = "Debe ser un número y mayor de edad (18 años o más).";
    }

    if ($user != "luis" || $password != "mendoza") {
        $errores[] = "Usuario o contraseña incorrectos.";
    }

    if (empty($errores)) {
        echo "Login exitoso!";
    } else {
        foreach ($errores as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
}
?>