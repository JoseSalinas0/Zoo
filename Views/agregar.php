<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Datos</title>
    <!--- Estilos --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <script src="https://kit.fontawesome.com/9c78b22e24.js" crossorigin="anonymous"></script>
</head>
    <body style="background-image: url(../img/z3.jpeg); background-position: center center; background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
        <h1 class="text-light text-center mt-2 bg-dark bg-opacity-50">Ingresar Datos</h1>
        
        <!--- Menu --->
        <div class="container bg-black bg-opacity-25 col-10 text-center pt-2 pb-2">
        <button id="bpe" class="btn btn-outline-danger text-light ">Peligro de extinción</button>
        <button id="bea" class="btn btn-outline-warning text-light ">Especie animal</button>
        <button id="ba" class="btn btn-outline-primary text-light ">Animales</button>
        <button id="bz" class="btn btn-outline-secondary text-light ">Zoológicos</button>
        <button id="bd" class="btn btn-outline-info text-light">Direcciones</button><br><br>
        <a href="menu.php" class="btn btn-outline-success text-light btn-lg">««Regresar</a>
        </div>

        <!--- Tabla --->
        <div id="peligroe" style="display: none;" class="mt-3 container-fluid col-10 text-center bg-danger bg-opacity-25 text-light pb-3">
            <h2>Tabla Peligro de extinción</h2>
            <form action="../Models/insertar.php" method="POST">
                <label>Clave de Peligro</label><br>
                <input type="text" name="clave_p"><br><br>
                <label>Color</label><br>
                <input type="text" name="color"><br><br>
                <label>Descripción</label><br>
                <input type="text" name="descripcion"><br><br>
                <input type="submit" name="" value="agregar" class="btn btn-outline-primary text-light"> 
            </form>
        </div>
        <div id="especieanimal" style="display: none;" class="mt-3 container-fluid col-10 text-center bg-warning bg-opacity-10 text-light pb-3">
            <h2>Tabla de Especies Animales</h2>
            <form action="../Models/insertar.php" method="POST">
                <label>Clave de la Especie Animal</label><br>
                <input type="text" name="ce"><br><br>
                <label>Clave de Peligro</label><br>
                <input type="text" name="cp"><br><br>
                <label>Nombre Común</label><br>
                <input type="text" name="nco"><br><br>
                <label>Nombre Cientifico</label><br>
                <input type="text" name="nci"><br><br>
                <label>Familia al que pertenece</label><br>
                <input type="text" name="fp"><br><br>
                <input type="submit" name="" value="agregar" class="btn btn-outline-primary text-light"> 
            </form>
        </div>
        <div id="animal" style="display: none;" class="mt-3 container-fluid col-10 text-center bg-primary bg-opacity-25 text-light pb-3">
            <h2>Tabla de Animales</h2>
            <form action="../Models/insertar.php" method="POST" >
                <label>Número de Identificación</label><br>
                <input type="text" name="ni"><br><br>
                <label>Familia</label><br>
                <input type="text" name="f"><br><br>
                <label>Zoológico</label><br>
                <input type="text" name="z"><br><br>
                <label>Sexo</label><br>
                <input type="text" name="se"><br><br>
                <label>Año de Nacimineto</label><br>
                <input type="text" name="an"><br><br>
                <label>País de Origen</label><br>
                <input type="text" name="po"><br><br>
                <input type="submit" name="" value="agregar" class="btn btn-outline-primary text-light"> 
            </form>
        </div>
        <div id="zoolo" style="display: none;" class="mt-3 container-fluid col-10 text-center bg-secondary bg-opacity-50 text-light pb-3">
            <h2>Tabla de Zoologicos</h2>
            <form action="../Models/insertar.php" method="POST">
                <label>Clave del Zoológico</label><br>
                <input type="text" name="czoo"><br><br>
                <label>Direccion</label><br>
                <input type="text" name="di"><br><br>
                <label>Nombre</label><br>
                <input type="text" name="nom"><br><br>
                <label>Tamaño (m2)</label><br>
                <input type="text" name="tm"><br><br>
                <label>Año de Apertura</label><br>
                <input type="text" name="ap"><br><br>
                <input type="submit" name="" value="agregar" class="btn btn-outline-primary text-light"> 
            </form>
        </div>
        <div id="direc" style="display: none;" class="mt-3 container-fluid col-10 text-center bg-info bg-opacity-25 text-light pb-3">
            <h2>Tabla de Direcciones</h2>
            <form action="../Models/insertar.php" method="POST">
                <label>Clave de la Dirección</label><br>
                <input type="text" name="cd"><br><br>
                <label>Ciudad</label><br>
                <input type="text" name="ci"><br><br>
                <label>País</label><br>
                <input type="text" name="p"><br><br>
                <input type="submit" name="" value="agregar" class="btn btn-outline-primary text-light"> 
            </form>
        </div>

    <!--- JS --->
    <script>
        let btnpe = document.getElementById("bpe");
        let dpe = document.getElementById("peligroe");
        let btnea = document.getElementById("bea");
        let dea = document.getElementById("especieanimal");
        let btna = document.getElementById("ba");
        let da = document.getElementById("animal");
        let btnz = document.getElementById("bz");
        let dz = document.getElementById("zoolo");
        let btnd = document.getElementById("bd");
        let dd = document.getElementById("direc");
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