<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio de secion</title>
    <!--- Estilos --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body style="background-image: url(img/z1.jpeg); background-position: center center; background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
    <h1 class="text-center espacio text-light bg-dark bg-opacity-50">Iniciar Sesión</h1>        
    <div class="container col-10 text-center espacio text-light bg-dark bg-opacity-50 fs-4 rounded-4">
        Hola querid@ Administrador, por favor de ingresar los datos correctamente. <br>
        Si no se acuerda de sus datos pongase en contacto con otro administrador. <br><br>
        <form action="./Models/sesion.php" method="post">
            <label for="">Ingrese su usuario</label><br>
            <input type="text" name="user" class="rounded-3 border-0 col-5"><br><br>
            <label for="">Ingrese su contraseña</label><br>
            <input type="password" name="pass" class="rounded-3 border-0 col-5"><br><br>
            <input type="submit" value="Entrar" class="btn btn-outline-primary col-3">
        </form><br>
    </div>
</body>
</html>