<?php
include("../Models/conexion.php");
$con=conectar();
$sql="select * from adminis";
$query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracion de usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <script src="https://kit.fontawesome.com/9c78b22e24.js" crossorigin="anonymous"></script>
</head>
<body style="background-image: url(../img/z5.jpeg); background-position: center center; background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
    <h1 class="text-center bg-dark bg-opacity-50 text-light">Administrador de usuarios</h1>
    <div class="container-fluid row text-light text-center mt-5">
        <div class="col-4 bg-dark bg-opacity-75">
            Agregar a un nuevo administrador: <br><br>
            <form action="../Models/insertar.php" method="post">
                <label for="nombre">Nombre del Administrador</label><br>
                <input type="text" name="nombre" placeholder="Admin" class="col-10"><br><br>
                <label for="pass">Contraseña:</label><br>
                <input type="password" name="pass" placeholder="Contraseña" class="col-10"><br><br>
                <input type="submit" value="Agregar" class="btn btn-outline-primary"><br><br>
            </form>
            <a href="menu.php" class="btn btn-outline-success text-light">««Regresar</a><br><br>
        </div>  
        <div class="col-8 bg-danger bg-opacity-50 text-center">
            <table class="table table-striped table-danger mt-2">
                <thead>
                    <tr>
                        <th># id</th>
                        <th>Nombre de Admin</th>
                        <th>Contraseña</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                <?php
                while ($row=mysqli_fetch_array($query)){
                ?>
                    <tr>
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['user']?></td>
                        <td><?php echo $row['pass']?></td>
                        <td>
                            <a href="editar.php?clave=<?php echo $row ['id']?>&tabla=6"><i class="fa-regular fa-pen-to-square"></i></a>
                            <a href="../Models/eliminar.php?clave=<?php echo $row ['id']?>&tabla=6"><i class="fa-solid fa-trash-can"></i></a>
                    </td>
                    </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>