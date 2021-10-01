<?php

include("../../conexion.php");
$TIPNid = $_POST['TIPNid'];
$NOTFecha = $_POST['NOTFecha'];
$NOTTitulo = $_POST['NOTTitulo'];
$NOTDescripcion = $_POST['NOTDescripcion'];

$imgName=$_FILES['NOTFoto']['name'];
$imgSize=$_FILES['NOTFoto']['size'];
$imgMaxSize=50120;
$RSReq = mysqli_query($conexion, "SELECT * FROM noticia");
$NumReq = mysqli_num_rows($RSReq);

if(($imgSize/1024)<=$imgMaxSize){
    chmod('../../admin/not/archivos/', 0777);
    $imgFinalName="imagen_".($NumReq+1).".png";
    if(move_uploaded_file($_FILES['NOTFoto']['tmp_name'],"../../admin/not/archivos/".$imgFinalName)){

        $sql = "INSERT INTO noticia (TIPNid,NOTFecha,NOTTitulo,NOTDescripcion,NOTFoto)
        VALUES ('$TIPNid','$NOTFecha','$NOTTitulo','$NOTDescripcion','$imgFinalName')";
        $resultado = $conexion->query($sql);
        $id_insert = $conexion->insert_id;

    }
}
echo $sql;



//header("Location: index.php");
?>
