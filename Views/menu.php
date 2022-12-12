<?php
include("../Models/conexion.php");
$con=conectar();
$sql="select * from peligro_extincion";
$sql1="select * from especie_animal";
$sql2="select * from animales";
$sql3="select * from zoologico";
$sql4="select * from direccion";
$query=mysqli_query($con,$sql);
$query1=mysqli_query($con,$sql1);
$query2=mysqli_query($con,$sql2);
$query3=mysqli_query($con,$sql3);
$query4=mysqli_query($con,$sql4);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú</title>
    <!--- Estilos --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <script src="https://kit.fontawesome.com/9c78b22e24.js" crossorigin="anonymous"></script>
</head>
<body style="background-image: url(../img/z2.jpeg); background-position: center center; background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
<h1 class="text-light text-center bg-dark bg-opacity-50">Administracion de una red de Zologicos</h1>

    <!--- Menu --->
    <div class="container bg-black bg-opacity-25 col-10 text-center pt-5 pb-5">
        <button id="bpe" class="btn btn-outline-danger btn-lg text-light mr-5">Peligro de extinción</button>
        <button id="bea" class="btn btn-outline-warning btn-lg text-light mr-5">Especie animal</button>
        <button id="ba" class="btn btn-outline-primary btn-lg text-light mr-5">Animales</button>
        <button id="bz" class="btn btn-outline-secondary btn-lg text-light">Zoológicos</button>
        <button id="bd" class="btn btn-outline-info btn-lg text-light">Direcciones</button><br><br>
        <a href="agregar.php" class="btn btn-outline-success text-light btn-lg me-1">Agregar Registros</a>
        <a href="usuarios.php" class="btn btn-outline-success text-light btn-lg ms-1">Administrar usuarios</a>
    </div>

    <!--- tablas --->
<div class="container-fluid row ">
    <div id="pe" style="display: none;" class="mt-3 container-fluid col-10 text-center">
        <h2 class="text-bg-danger">Tabla del Peligro de extinción</h2>
        <table class="table table-striped table-danger" >
            <thead>
                <tr>
                    <th>Clave de Peligro</th>
                    <th>Color</th>
                    <th>Descripción</th>
                    <th>METODOS</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                while ($row=mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $row['clave_p']?></td>
                    <td><?php echo $row['color']?></td>
                    <td><?php echo $row['descripcion']?></td>
                    <td>
                        <a href="editar.php?clave=<?php echo $row ['clave_p']?>&tabla=1"><i class="fa-regular fa-pen-to-square"></i></a>
                        <a href="../Models/eliminar.php?clave=<?php echo $row ['clave_p']?>&tabla=1"><i class="fa-solid fa-trash-can"></i></a>
                </td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

    
    <div id="ea" style="display: none;" class="mt-3 container-fluid col-10 text-center" >
        <h2 class="text-bg-warning">Tabla de las Especies Animales</h2>
        <table class="table table-striped table-warning">
            <thead>
                <tr>
                    <th>Clave Especie Animal</th>
                    <th>Clave de Peligro</th>
                    <th>Nombre Común</th>
                    <th>Nombre Cientifico</th>
                    <th>Familia al que pertenece</th>
                    <th>METODOS</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                while ($row=mysqli_fetch_array($query1)){
                ?>
                <tr>
                    <td><?php echo $row['clave_ea']?></td>
                    <td><?php echo $row['clave_p']?></td>
                    <td><?php echo $row['nombre_comun']?></td>
                    <td><?php echo $row['nombre_cientifico']?></td>
                    <td><?php echo $row['familia_al_que_pertenece']?></td>
                    <td>
                        <a href="editar.php?clave=<?php echo $row ['clave_ea']?>&tabla=2"><i class="fa-regular fa-pen-to-square"></i></a>
                        <a href="../Models/eliminar.php?clave=<?php echo $row ['clave_ea']?>&tabla=2"><i class="fa-solid fa-trash-can"></i></a>
                    </td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </div>
    

    <div id="a" style="display: none;" class="mt-3 container-fluid col-10 text-center">
        <h2 class="text-bg-primary">Tabla de los Animales</h2>
        <table class="table table-striped table-primary">
            <thead>
                <tr>
                    <th>Número de Identificación</th>
                    <th>Clave de su Familia</th>
                    <th>Clave del Zoológico</th>
                    <th>Sexo</th>
                    <th>Año de nacimiento</th>
                    <th>País de Origen</th>
                    <th>METODOS</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                while ($row=mysqli_fetch_array($query2)){
                ?>
                <tr>
                    <td><?php echo $row['num_id']?></td>
                    <td><?php echo $row['familia']?></td>
                    <td><?php echo $row['clave_zoo']?></td>
                    <td><?php echo $row['sexo']?></td>
                    <td><?php echo $row['anio_nacimiento']?></td>
                    <td><?php echo $row['pais_origen']?></td>
                    <td>
                        <a href="editar.php?clave=<?php echo $row ['num_id']?>&tabla=3"><i class="fa-regular fa-pen-to-square"></i></a>
                        <a href="../Models/eliminar.php?clave=<?php echo $row ['num_id']?>&tabla=3"><i class="fa-solid fa-trash-can"></i></a>
                    </td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </div>

    <div id="z" style="display: none;" class="container-fluid col-10 text-center">
        <h2 class="text-bg-secondary">Tabla De los Zoológicos</h2>
        <table class="table table-striped table-secondary">
            <thead>
                <tr>
                    <th>Clave del Zoológico</th>
                    <th>Dirección</th>
                    <th>Nombre</th>
                    <th>Tamaño (m2)</th>
                    <th>Año de Fundación</th>
                    <th>METODOS</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                while ($row=mysqli_fetch_array($query3)){
                ?>
                <tr>
                    <td><?php echo $row['clave_zoo']?></td>
                    <td><?php echo $row['direccion']?></td>
                    <td><?php echo $row['nombre']?></td>
                    <td><?php echo $row['tamano_m2']?></td>
                    <td><?php echo $row['anio_apertura']?></td>
                    <td>
                        <a href="editar.php?clave=<?php echo $row ['clave_zoo']?>&tabla=4"><i class="fa-regular fa-pen-to-square"></i></a>
                        <a href="../Models/eliminar.php?clave=<?php echo $row ['clave_zoo']?>&tabla=4"><i class="fa-solid fa-trash-can"></i></a>
                    </td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </div>
        
    <div id="d" style="display: none;" class="container-fluid col-10 text-center">
        <h2 class="text-bg-info">Tabla del Peligro de extinción</h2>
        <table class="table table-striped table-info">
            <thead>
                <tr>
                    <th>Clave de la Direccion</th>
                    <th>Ciudad</th>
                    <th>País</th>
                    <th>METODOS</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                while ($row=mysqli_fetch_array($query4)){
                ?>
                <tr>
                    <td><?php echo $row['clave_dir']?></td>
                    <td><?php echo $row['ciudad']?></td>
                    <td><?php echo $row['pais']?></td>
                    <td>
                        <a href="editar.php?clave=<?php echo $row ['clave_dir']?>&tabla=5"><i class="fa-regular fa-pen-to-square"></i></a>
                        <a href="../Models/eliminar.php?clave=<?php echo $row ['clave_dir']?>&tabla=5"><i class="fa-solid fa-trash-can"></i></a>
                    </td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </div>

    <!--- JS --->
    <script>
        let btnpe = document.getElementById("bpe");
        let dpe = document.getElementById("pe");
        let btnea = document.getElementById("bea");
        let dea = document.getElementById("ea");
        let btna = document.getElementById("ba");
        let da = document.getElementById("a");
        let btnz = document.getElementById("bz");
        let dz = document.getElementById("z");
        let btnd = document.getElementById("bd");
        let dd = document.getElementById("d");
        let vpe=false;
        let vea=false;
        let va= false;
        let vz= false;
        let vd= false;
        btnpe.addEventListener('click', function(){
            if(vpe==false){
                dpe.style.display="block";
                dea.style.display="none";
                da.style.display="none";
                dz.style.display="none";
                dd.style.display="none";
                vpe = true;
                vea=false;
                va= false;
                vz= false;
                vd= false;
            }else{
                vpe = false;
                dpe.style.display="none";
            }
        })
        btnea.addEventListener('click', function(){
            if(vea==false){
                dea.style.display="block";
                dpe.style.display="none";
                da.style.display="none";
                dz.style.display="none";
                dd.style.display="none";
                vea = true;
                vpe=false;
                va= false;
                vz= false;
                vd= false;
            }else{
                vea = false;
                dea.style.display="none";
            }
        })
        btna.addEventListener('click', function(){
            if(va==false){
                da.style.display="block";
                dpe.style.display="none";
                dea.style.display="none";
                dz.style.display="none";
                dd.style.display="none";
                va = true;
                vpe=false;
                vea=false;
                vz= false;
                vd= false;
            }else{
                va = false;
                da.style.display="none";
            }
        })
        btnz.addEventListener('click', function(){
            if(vz==false){
                dz.style.display="block";
                dpe.style.display="none";
                dea.style.display="none";
                da.style.display="none";
                dd.style.display="none";
                vz = true;
                vpe=false;
                vea=false;
                va= false;
                vd= false;
            }else{
                vz = false;
                dz.style.display="none";
            }
        })
        btnd.addEventListener('click', function(){
            if(vd==false){
                dd.style.display="block";
                dpe.style.display="none";
                dea.style.display="none";
                da.style.display="none";
                dz.style.display="none";
                vd = true;
                vpe=false;
                vea=false;
                va= false;
                vz= false;
            }else{
                vd = false;
                dd.style.display="none";
            }
        })
    </script>
</body>
</html>