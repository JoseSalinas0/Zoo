<?php
include("../Models/conexion.php");
$con=conectar();
$tab=$_GET['tabla'];
if($tab==1){
	$sql="select * from peligro_extincion WHERE clave_p='".$_GET['clave']."'";
}	else if($tab==2){
	$sql="select * from especie_animal WHERE clave_ea='".$_GET['clave']."'";
}	else if($tab==3){
	$sql="select * from animales WHERE num_id='".$_GET['clave']."'";
}	else if($tab==4){
	$sql="select * from zoologico WHERE clave_zoo='".$_GET['clave']."'";
}	else if($tab==5){
	$sql="select * from direccion WHERE clave_dir='".$_GET['clave']."'";
}	else if($tab==6){
	$sql="select * from adminis WHERE id='".$_GET['clave']."'";
}
$query=mysqli_query($con,$sql);
$item=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Actualizar Registro</title>
    <!--- Estilos --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <script src="https://kit.fontawesome.com/9c78b22e24.js" crossorigin="anonymous"></script>
</head>
<body style="background-image: url(../img/z4.jpeg); background-position: center center; background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
	<h1 class="text-center bg-black bg-opacity-50 text-light">Actualizar Registro</h1>

	<!--- Tablas --->
	<div id="tpe" style="display: none;" class="mt-3 container-fluid col-10 text-center bg-danger bg-opacity-50 text-light pb-3">
	<h2>Clave de Peligro que se esta editando: <?php echo $_GET['clave']?></h2>
		<form action="../Models/update.php?id=<?php echo $_GET['clave']?>"method="POST">
			<label>Clave de Peligro</label><br>
			<input type="text" name="clave_p" value="<?php echo $item['clave_p']?>"><br><br>
			<label>Color</label><br>
			<input type="text" name="color" value="<?php echo $item['color']?>"><br><br>
			<label>Descripcion</label><br>
			<input type="text" name="descripcion" value="<?php echo $item['descripcion']?>"><br><br>
			<input type="submit" name="" value="Actualizar" class="btn btn-outline-primary text-light">
			<a href="menu.php" class="btn btn-outline-success text-light">««Regresar</a>
		</form>
	</div>	
	<div id="tea" style="display: none;" class="mt-3 container-fluid col-10 text-center bg-warning bg-opacity-50 text-dark pb-3">
	<h2>Clave de la Especie Animal que se esta editando: <?php echo $_GET['clave']?></h2>
		<form action="../Models/update.php?id=<?php echo $_GET['clave']?>"method="POST">
			<label>Clave de Especie Animal</label><br>
			<input type="text" name="ce" value="<?php echo $item['clave_ea']?>"><br><br>
			<label>Clave de Peligro de Extinción</label><br>
			<input type="text" name="cp" value="<?php echo $item['clave_p']?>"><br><br>
			<label>Nombre Común</label><br>
			<input type="text" name="nco" value="<?php echo $item['nombre_comun']?>"><br><br>
			<label>Nombre Cientifico</label><br>
			<input type="text" name="nci" value="<?php echo $item['nombre_cientifico']?>"><br><br>
			<label>Familia al que pertenece</label><br>
			<input type="text" name="fp" value="<?php echo $item['familia_al_que_pertenece']?>"><br><br>
			<input type="submit" name="" value="Actualizar" class="btn btn-outline-primary text-light">
			<a href="menu.php" class="btn btn-outline-success text-light">««Regresar</a>
		</form>
	</div>
	<div id="ta" style="display: none;" class="mt-3 container-fluid col-10 text-center bg-primary bg-opacity-50 text-light pb-3">
	<h2>Numero de Identificacion del Animal que se esta editando: <?php echo $_GET['clave']?></h2>
		<form action="../Models/update.php?id=<?php echo $_GET['clave']?>"method="POST">
			<label>Número de Identificación</label><br>
			<input type="text" name="ni" value="<?php echo $item['num_id']?>"><br><br>
			<label>Familia</label><br>
			<input type="text" name="f" value="<?php echo $item['familia']?>"><br><br>
			<label>Clave del zoologico</label><br>
			<input type="text" name="z" value="<?php echo $item['clave_zoo']?>"><br><br>
			<label>Sexo</label><br>
			<input type="text" name="se" value="<?php echo $item['sexo']?>"><br><br>
			<label>Año de Nacimineto</label><br>
			<input type="text" name="an" value="<?php echo $item['anio_nacimiento']?>"><br><br>
			<label>País Origen</label><br>
			<input type="text" name="po" value="<?php echo $item['pais_origen']?>"><br><br>
			<input type="submit" name="" value="Actualizar" class="btn btn-outline-primary text-light">
			<a href="menu.php" class="btn btn-outline-success text-light">««Regresar</a>
		</form>
	</div>
	<div id="tz" style="display: none;" class="mt-3 container-fluid col-10 text-center bg-secondary bg-opacity-50 text-light pb-3">
	<h2>Clave del Zoológico que se esta editando: <?php echo $_GET['clave']?></h2>
		<form action="../Models/update.php?id=<?php echo $_GET['clave']?>"method="POST">
			<label>Clave del Zoológico</label><br>
			<input type="text" name="czoo" value="<?php echo $item['clave_zoo']?>"><br><br>
			<label>Direccion</label><br>
			<input type="text" name="di" value="<?php echo $item['direccion']?>"><br><br>
			<label>Nombre</label><br>
			<input type="text" name="nom" value="<?php echo $item['nombre']?>"><br><br>
			<label>Tamaño (m2)</label><br>
			<input type="text" name="tm" value="<?php echo $item['tamano_m2']?>"><br><br>
			<label>Año de Apertura</label><br>
			<input type="text" name="ap" value="<?php echo $item['anio_apertura']?>"><br><br>
			<input type="submit" name="" value="Actualizar" class="btn btn-outline-primary text-light">
			<a href="menu.php" class="btn btn-outline-success text-light">««Regresar</a>
		</form>
	</div>
	
	<div id="td" style="display: none;" class="mt-3 container-fluid col-10 text-center bg-info bg-opacity-50 text-light pb-3">
	<h2>Clave de la Dirección que se esta editando: <?php echo $_GET['clave']?></h2>
		<form action="../Models/update.php?id=<?php echo $_GET['clave']?>"method="POST">
			<label>Clave de la Direccion</label><br>
			<input type="text" name="cd" value="<?php echo $item['clave_dir']?>"><br><br>
			<label>Ciudad</label><br>
			<input type="text" name="ci" value="<?php echo $item['ciudad']?>"><br><br>
			<label>País</label><br>
			<input type="text" name="p" value="<?php echo $item['pais']?>"><br><br>
			<input type="submit" name="" value="Actualizar" class="btn btn-outline-primary text-light">
			<a href="menu.php" class="btn btn-outline-success text-light">««Regresar</a>
		</form>
	</div>

	<div id="tu" style="display: none;" class="mt-3 container-fluid col-10 text-center bg-success bg-opacity-50 text-light pb-3">
	<h2>Clave de la Dirección que se esta editando: <?php echo $_GET['clave']?></h2>
		<form action="../Models/update.php?id=<?php echo $_GET['clave']?>"method="POST">
			<label>Clave de la Direccion</label><br>
			<input type="text" name="iden" value="<?php echo $item['id']?>"><br><br>
			<label>Ciudad</label><br>
			<input type="text" name="admin" value="<?php echo $item['user']?>"><br><br>
			<label>País</label><br>
			<input type="text" name="contra" value="<?php echo $item['pass']?>"><br><br>
			<input type="submit" name="" value="Actualizar" class="btn btn-outline-primary text-light">
			<a href="usuarios.php" class="btn btn-outline-success text-light">««Regresar</a>
		</form>
	</div>

	<!--- JS --->
	<script>
			var t= <?php echo $tab?>;
			var tpe=document.getElementById('tpe');
			var tea=document.getElementById('tea');
			var ta=document.getElementById('ta');
			var tz=document.getElementById('tz');
			var td=document.getElementById('td');
			var tu=document.getElementById('tu');
			if(t==1){
				tpe.style.display="block";
			} 	else if(t==2){
				tea.style.display="block";
			}	else if(t==3){
				ta.style.display="block";
			}	else if(t==4){
				tz.style.display="block";
			}	else if(t==5){
				td.style.display="block";
			}	else if(t==6){
				tu.style.display="block";
			}
	</script>
</body>
</html>