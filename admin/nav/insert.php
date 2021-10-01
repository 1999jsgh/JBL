<?php

include("../../conexion.php");



$imgName=$_FILES['NAVImagen']['name'];
$imgSize=$_FILES['NAVImagen']['size'];
$imgMaxSize=50120;
$RSReq = mysqli_query($conexion, "SELECT * FROM navbar");
$NumReq = mysqli_num_rows($RSReq);



            if(($imgSize/1024)<=$imgMaxSize){
                chmod('../../admin/nav/archivos/', 0777);
                $imgFinalName="imagen_".($NumReq+1).".png";
                if(move_uploaded_file($_FILES['NAVImagen']['tmp_name'],"../../admin/nav/archivos/".$imgFinalName)){

                    $sql = "INSERT INTO navbar (NAVImagen)
                    VALUES ('$imgFinalName')";
                    $resultado = $conexion->query($sql);
                    $id_insert = $conexion->insert_id;
	
                }
            }
        



header("Location: index.php");
?>
