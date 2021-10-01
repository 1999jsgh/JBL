<?php

include("../../conexion.php");

$TIPid = $_POST['TIPid'];
$VENTitulo = $_POST['VENTitulo'];
$VENFecha = $_POST['VENFecha'];
$VENDescripcion = $_POST['VENDescripcion'];
$VENPrecio = $_POST['VENPrecio'];
$VENContacto = $_POST['VENContacto'];
$imgName=$_FILES['VENFoto']['name'];
$imgSize=$_FILES['VENFoto']['size'];
$imgMaxSize=50120;
$RSReq = mysqli_query($conexion, "SELECT * FROM venta");
$NumReq = mysqli_num_rows($RSReq);


if($imgName!=""){
    chmod('../../admin/ven/archivos/', 0777);
    $imgFinalName="imagen_".($NumReq+1).".png";
    if(move_uploaded_file($_FILES['VENFoto']['tmp_name'],"../../admin/ven/archivos/".$imgFinalName)){

        $sql = "INSERT INTO venta (TIPid,VENTitulo,VENFecha,VENDescripcion,VENPrecio,VENContacto,VENFoto)
        VALUES ('$TIPid','$VENTitulo','$VENFecha','$VENDescripcion','$VENPrecio','$VENContacto','$imgFinalName')";
        $resultado = $conexion->query($sql);
        $id_insert = $conexion->insert_id;

    }
}


header("Location: index.php");
?>
