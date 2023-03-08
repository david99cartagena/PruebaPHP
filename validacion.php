<!DOCTYPE html>
<html lang="en">

<body>
<?php

$error;
if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    if ($usuario == "usuario" && $password == "123") {
        session_start();
        $_SESSION['usuario'] = session_id();
        $error = "O.K";
        echo "Bienvenido al sistema";
        <div>
        <button>
            <a href="logout.php">Cerrar Sesión</a>
        </button>
        </div>
    } else {
        $error = "incorrecto";
        header("Location: index.php?error=$error");
    }
} else {
    $error = "vacio";
    header("Location: index.php?error=$error");
}

?>