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

    <!--form method="post" action="login.php">
        User Id: <input type="text" name="userid"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" value="Login">
    </form-->

    <body>

        <div class="login">

            <h1 class="text-center">Bienvenido !!</h1>

            <form class="needs-validation" action="login.php" method="POST">

                <label class="form-label" for="usuario">Usuario</label>
                <input class="form-control" type="text" id="usuario" name="usuario">
                <label class="form-label" for="password">Contraseña</label>
                <input class="form-control" type="password" id="password" name="password">

                <input class="btn btn-success w-100" type="submit" value="Acceder">
            </form>

        </div>

    </body>

    </html>