<?php
include("conexion.php");
$con = conectar();

$cp=$_POST['clave_p'];
$c=$_POST['color'];
$des =$_POST['descripcion'];
if($cp!=null||$c!=null||$des!=null){
    $sql1="insert into peligro_extincion(clave_p,color,descripcion)
    VALUES('".$cp."','".$c."','".$des."')";
    mysqli_query($con,$sql1);
    if($usuario=1){
        header("location:../Views/menu.php");
    }
} else {
    $ce=$_POST['ce'];
    $cp=$_POST['cp'];
    $nco =$_POST['nco'];
    $nci=$_POST['nci'];
    $fp=$_POST['fp'];
    if($ce!=null||$cp!=null||$nco!=null||$nci!=null||$fp!=null){
        $sql2="insert into especie_animal(clave_ea,clave_p,nombre_comun,nombre_cientifico,familia_al_que_pertenece)
        VALUES('".$ce."','".$cp."','".$nco."','".$nci."','".$fp."')";
        mysqli_query($con,$sql2);
        if($usuario=1){
            header("location:index.php");
        }
    } else{
        $ni =$_POST['ni'];
        $f=$_POST['f'];
        $z=$_POST['z'];
        $se =$_POST['se'];
        $an =$_POST['an'];
        $po=$_POST['po'];
        if($ni!=null||$f!=null||$z!=null||$se!=null||$an!=null||$po!=null){
            $sql3="insert into animales(num_id,familia,clave_zoo,sexo,anio_nacimiento,pais_origen)
            VALUES('".$ni."','".$f."','".$z."','".$se."','".$an."','".$po."')";
            mysqli_query($con,$sql3);
            if($usuario=1){
                header("location:index.php");
            }
        } else{
            $czoo=$_POST['czoo'];
            $di =$_POST['di'];
            $nom =$_POST['nom'];
            $tm=$_POST['tm'];
            $ap=$_POST['ap'];
            if($czoo!=null||$di!=null||$nom!=null||$tm!=null||$ap!=null){
                $sql4="insert into zoologico(clave_zoo,direccion,nombre,tamano_m2,anio_apertura)
                VALUES('".$czoo."','".$di."','".$nom."','".$tm."','".$ap."')";
                mysqli_query($con,$sql4);
                if($usuario=1){
                    header("location:index.php");
                }
            } else {
                $cd=$_POST['cd'];
                $ci =$_POST['ci'];
                $p =$_POST['p'];
                if($cd!=null||$ci!=null||$p!=null){
                    $sql5="insert into direccion(clave_dir,ciudad,pais)
                    VALUES('".$cd."','".$ci."','".$p."')";
                    mysqli_query($con,$sql5);
                    if($usuario=1){
                        header("location:index.php");
                    }
                }   else {
                    $nombre =$_POST['nombre'];
                    $pass =$_POST['pass'];
                    if($nombre!=null||$pass!=null){
                        $sql6="insert into adminis(user,pass)
                        VALUES('".$nombre."','".$pass."')";
                        mysqli_query($con,$sql6);
                        if($usuario=1){
                            header("location:../Views/usuarios.php");
                        }
                    }
                }
            }   
        } 
    }
} 
?>