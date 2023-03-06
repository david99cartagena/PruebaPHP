<?php

$error;
if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    if ($usuario == "usuario" && $password == "123") {
        $error = "O.K";
        echo "Bienvenido al sistema";
    } else {
        $error = "incorrecto";
        header("Location: index.php?error=$error");
    }
} else {
    $error = "vacio";
    header("Location: index.php?error=$error");
}
