<?php

include("../../conexion.php");

$PORPortafolio = $_POST['PORPortafolio'];
$PORCentrarse = $_POST['PORCentrarse'];
$PORImagen1=$_FILES['PORImagen1']['name'];
$PORImagen2=$_FILES['PORImagen2']['name'];
$RSReq = mysqli_query($conexion, "SELECT PORid FROM portafolio");
$NumReq = mysqli_fetch_row($RSReq);


if($PORImagen1!="" && $PORImagen2!=""){
    chmod('../../admin/por/archivos/', 0777);
    $fondo1="PORImagen1".($NumReq[0]+1).".png";
    $fondo2="PORImagen2".($NumReq[0]+1).".png";
    if(move_uploaded_file($_FILES['PORImagen1']['tmp_name'],"../../admin/por/archivos/".$fondo1) && move_uploaded_file($_FILES['PORImagen2']['tmp_name'],"../../admin/por/archivos/".$fondo2)){

        $sql = "INSERT INTO portafolio (PORPortafolio,PORCentrarse,PORImagen1,PORImagen2)
        VALUES ('$PORPortafolio','$PORCentrarse','$fondo1','$fondo2')";
        $resultado = $conexion->query($sql);
        echo $sql;
        $id_insert = $conexion->insert_id;

    }
}


header("Location: index.php");
?>
