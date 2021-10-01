<?php

include("../../conexion.php");

$SIDTitulo = $_POST['SIDTitulo'];
$SIDLink = $_POST['SIDLink'];
$imgName=$_FILES['SIDImagen']['name'];
$imgSize=$_FILES['SIDImagen']['size'];
$imgMaxSize=50120;
$RSReq = mysqli_query($conexion, "SELECT * FROM sidebar");
$NumReq = mysqli_num_rows($RSReq);



            if(($imgSize/1024)<=$imgMaxSize){
                chmod('../../admin/sid/archivos/', 0777);
                $imgFinalName="imagen_".($NumReq+1).".png";
                if(move_uploaded_file($_FILES['SIDImagen']['tmp_name'],"../../admin/sid/archivos/".$imgFinalName)){

                    $sql = "INSERT INTO sidebar (SIDTitulo,SIDImagen,SIDLink)
                    VALUES ('$SIDTitulo','$imgFinalName','$SIDLink')";
                    $resultado = $conexion->query($sql);
                    $id_insert = $conexion->insert_id;
	
                }
            }
        



header("Location: index.php");
?>
