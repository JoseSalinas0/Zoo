<?php
include("conexion.php");
$con=conectar();
$user=$_POST['user']; 
$pass=$_POST['pass']; 

$sql='SELECT user, pass FROM adminis WHERE user="'.$user.'" and pass="'.$pass.'"'; 
$query=mysqli_query($con,$sql); 
if($row=mysqli_fetch_array($query)){ 
    if($row['user']==$user&&$row['pass']==$pass){ 
        header('Location:../Views/menu.php'); 
    } 
}else{ 
    header('Location:../index.php'); 
}
?>