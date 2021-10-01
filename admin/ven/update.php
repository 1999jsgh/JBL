
<?php

include("../../conexion.php");

$VENid = $_POST['VENid'];
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
    if(($imgSize/1024)<=$imgMaxSize){
        chmod('../ven/archivos/', 0777);
        $imgFinalName="imagen_".($NumReq).".png";
        if(move_uploaded_file($_FILES['VENFoto']['tmp_name'],"../ven/archivos/".$imgFinalName)){
    
            $sql = "UPDATE venta SET TIPid = '" . $TIPid . "',VENTitulo = '" . $VENTitulo . "',VENFecha = '" . $VENFecha . "',
            VENDescripcion = '" . $VENDescripcion . "',VENFoto = '" . $imgFinalName . "',
            VENContacto = '" . $VENContacto . "' WHERE VENid =  '" . $_POST["VENid"] . "'";
            $resultado = $conexion->query($sql);
            $id_insert = $conexion->insert_id;
    
        }            
    }
}else {
    $sql = "UPDATE venta SET TIPid = '" . $TIPid . "',VENTitulo = '" . $VENTitulo . "',VENFecha = '" . $VENFecha . "',
    VENDescripcion = '" . $VENDescripcion . "',VENDescripcion = '" . $VENDescripcion . "',VENFoto = '" . $VENFoto . "' WHERE NOTid =  '" . $_POST["NOTid"] . "'";
    $resultado = $conexion->query($sql);
    $id_insert = $conexion->insert_id;
}

header("Location: index.php");
?>
