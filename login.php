<?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);

    $stmt->execute();
    $resultado = $stmt->get_result();

    if (mysqli_num_rows($resultado) > 0) {
        echo "Bienvenido";
    }
?>