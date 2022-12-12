<?php
include("conexion.php");
$con=conectar();

$c=$_GET['clave'];
$t=$_GET['tabla'];

if($t==1){
    $sql="DELETE FROM peligro_extincion WHERE clave_p='".$c."';";
} else if($t==2){
    $sql="DELETE FROM especie_animal WHERE clave_ea='".$c."';";
} else if($t==3){
    $sql="DELETE FROM animales WHERE num_id='".$c."';";
} else if($t==4){
    $sql="DELETE FROM zoologico WHERE clave_zoo='".$c."';";
} else if($t==5){
    $sql="DELETE FROM direccion WHERE clave_dir='".$c."';";
} else if($t==6){
    $sql="DELETE FROM adminis WHERE id='".$c."';";
}

$query=mysqli_query($con,$sql);
if($query){
    header("location:../Views/menu.php");
}
?>