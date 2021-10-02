<?php

include("../../conexion.php");

$BANTitulo = $_POST['BANTitulo'];
$BANFondo=$_FILES['BANFondo']['name'];
$BANLogo=$_FILES['BANLogo']['name'];
$RSReq = mysqli_query($conexion, "SELECT BANid FROM banner");
$NumReq = mysqli_fetch_row($RSReq);


if($BANFondo!="" && $BANLogo!=""){
    chmod('../../admin/ban/archivos/', 0777);
    $fondoFondo="BANFondo_".($NumReq[0]+1).".png";
    $fondoLogo="BANLogo".($NumReq[0]+1).".png";
    if(move_uploaded_file($_FILES['BANFondo']['tmp_name'],"../../admin/ban/archivos/".$fondoFondo) && move_uploaded_file($_FILES['BANLogo']['tmp_name'],"../../admin/ban/archivos/".$fondoLogo)){

        $sql = "INSERT INTO banner (BANTitulo,BANFondo,BANLogo)
        VALUES ('$BANTitulo','$fondoFondo','$fondoLogo')";
        $resultado = $conexion->query($sql);
        echo $sql;
        $id_insert = $conexion->insert_id;

    }
}


header("Location: index.php");
?>
