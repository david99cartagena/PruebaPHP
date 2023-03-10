<!DOCTYPE html>
<html>

<body>

    <html lang="en">

    <head>

        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap v5.1.3 CDNs -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- CSS File -->
        <link rel="stylesheet" href="style.css">

    </head>

    <?php
    $uid = $_POST['usuario'];
    $pw = $_POST['password'];

    if ($uid == 'usuario' and $pw == '123') {
        session_start();
        $_SESSION['sid'] = session_id();

        echo "
        <div class=login>
            <form>
                <Label>Bienvenido !!</label>
            </form>
        </div>";
    }
    ?>

    <div class="login">
        <form>
            <button>
                <a href="logout.php">Cerrar Sesión</a>
            </button>
        </form>
    </div>

</body>

</html>