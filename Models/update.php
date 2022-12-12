<?php
include("conexion.php");
$con=conectar();
$id=$_GET['id'];

$cp=$_POST['clave_p'];
$c=$_POST['color'];
$des =$_POST['descripcion'];
if($cp!=null||$c!=null||$des!=null){
    $sql=" UPDATE peligro_extincion SET clave_p='".$cp."',color='".$c."',descripcion='".$des."' WHERE clave_p='".$id."';";
    $query=mysqli_query($con,$sql);
    if($query){
        header("location:../Views/menu.php");
    }
} else{
    $ce=$_POST['ce'];
    $cpe=$_POST['cp'];
    $nco=$_POST['nco'];
    $nci=$_POST['nci'];
    $fp=$_POST['fp'];
    if($ce!=null||$cp!=null||$nco!=null||$nci!=null||$fp!=null){
        $sql2="UPDATE especie_animal SET clave_ea='".$ce."',clave_p='".$cpe."',nombre_comun='".$nco."',
        nombre_cientifico='".$nci."',familia_al_que_pertenece='".$fp."' WHERE clave_ea='".$id."';";
        mysqli_query($con,$sql2);
        if($usuario=1){
            header("location:../Views/menu.php");
        }
    } else{
        $ni=$_POST['ni'];
        $f=$_POST['f'];
        $z=$_POST['z'];
        $se=$_POST['se'];
        $an=$_POST['an'];
        $po=$_POST['po'];
        if($ni!=null||$f!=null||$z!=null||$se!=null||$an!=null||$po!=null){
            $sql3="UPDATE animales SET num_id='".$ni."',familia='".$f."',clave_zoo='".$z."',
            sexo='".$se."',anio_nacimiento='".$an."',pais_origen='".$po."' WHERE num_id='".$id."';";
            mysqli_query($con,$sql3);
            if($usuario=1){
                header("location:../Views/menu.php");
            }
        } else{
            $czoo=$_POST['czoo'];
            $di =$_POST['di'];
            $nom =$_POST['nom'];
            $tm=$_POST['tm'];
            $ap=$_POST['ap'];
            if($czoo!=null||$di!=null||$nom!=null||$tm!=null||$ap!=null){
                $sql4="UPDATE zoologico SET clave_zoo='".$czoo."',direccion='".$di."',nombre='".$nom."',
                tamano_m2='".$tm."',anio_apertura='".$ap."' WHERE clave_zoo='".$id."';";
                mysqli_query($con,$sql4);
                if($usuario=1){
                    header("location:../Views/menu.php");
                }
            } else {
                $cd=$_POST['cd'];
                $ci =$_POST['ci'];
                $p =$_POST['p'];
                if($cd!=null||$ci!=null||$p!=null){
                    $sql5="UPDATE direccion SET clave_dir='".$cd."',ciudad='".$ci."',pais='".$p."' 
                    WHERE clave_dir='".$id."';";
                    mysqli_query($con,$sql5);
                    if($usuario=1){
                        header("location:../Views/menu.php");
                    }
                }   else{
                    $i=$_POST['iden'];
                    $a =$_POST['admin'];
                    $c =$_POST['contra'];
                    if($i!=null||$a!=null||$c!=null){
                        $sql6="UPDATE adminis SET id='".$i."',user='".$a."',pass='".$c."' 
                        WHERE id='".$i."';";
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