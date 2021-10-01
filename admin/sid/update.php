
<?php

include("../../conexion.php");

$SIDid=$_POST['SIDid'];
$SIDTitulo=$_POST['SIDTitulo'];
$SIDLink=$_POST['SIDLink'];
$imgName=$_FILES['SIDImagen']['name'];
$imgSize=$_FILES['SIDImagen']['size'];
$imgMaxSize=50120;
$RSReq = mysqli_query($conexion, "SELECT * FROM sidebar");
$NumReq = mysqli_num_rows($RSReq);

if($imgName!=""){
    if(($imgSize/1024)<=$imgMaxSize){
        chmod('../sid/archivos/', 0777);
        $imgFinalName="imagen_".($NumReq).".png";
        if(move_uploaded_file($_FILES['SIDImagen']['tmp_name'],"../sid/archivos/".$imgFinalName)){
            $sql="UPDATE sidebar SET SIDTitulo = '$SIDTitulo',SIDImagen = '$imgFinalName',SIDLink = '$SIDLink' WHERE SIDid= '".$_POST["SIDid"]."'";
            $resultado = $conexion->query($sql);
            $id_insert = $conexion->insert_id;
        }             
    }
}else {
    $sql = "UPDATE sidebar SET SIDTitulo = '" . $SIDTitulo . "',SIDLink = '" . $SIDLink . "' WHERE SIDid =  '" . $_POST["SIDid"] . "'";
    $resultado = $conexion->query($sql);
    $id_insert = $conexion->insert_id;
}




header("Location: index.php");
?>
