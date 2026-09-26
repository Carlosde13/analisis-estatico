<?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios 
            WHERE usuario = '$username' 
            AND password = '$password'";

    $resultado = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        echo "Bienvenido";
    }
?>