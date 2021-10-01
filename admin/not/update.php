
<?php

include("../../conexion.php");

$NOTid= $_POST['NOTid'];
$TIPNid = $_POST['TIPNid'];
$NOTFecha = $_POST['NOTFecha'];
$NOTTitulo = $_POST['NOTTitulo'];
$NOTDescripcion = $_POST['NOTDescripcion'];

$imgName=$_FILES['NOTFoto']['name'];
$imgSize=$_FILES['NOTFoto']['size'];
$imgMaxSize=50120;
$RSReq = mysqli_query($conexion, "SELECT * FROM noticia");
$NumReq = mysqli_num_rows($RSReq);



if($imgName!=""){
    if(($imgSize/1024)<=$imgMaxSize){
        chmod('../not/archivos/', 0777);
        $imgFinalName="imagen_".($NumReq).".png";
        if(move_uploaded_file($_FILES['NOTFoto']['tmp_name'],"../not/archivos/".$imgFinalName)){
            $sql="UPDATE noticia SET TIPNid = '$TIPNid',NOTFecha = '$NOTFecha',NOTTitulo = '$NOTTitulo',
             NOTDescripcion = '$NOTDescripcion',NOTFoto = '$imgFinalName' WHERE NOTid= '".$_POST["NOTid"]."'";
            $resultado = $conexion->query($sql);
            $id_insert = $conexion->insert_id;
            echo $resultado;
            echo $id_insert;
        }             
    }
}else {
    $sql = "UPDATE noticia SET TIPNid = '" . $TIPNid . "',NOTFecha = '" . $NOTFecha . "',NOTDescripcion = '" . $NOTDescripcion . "',NOTTitulo = '" . $NOTTitulo . "' WHERE NOTid =  '" . $_POST["NOTid"] . "'";
    $resultado = $conexion->query($sql);
    $id_insert = $conexion->insert_id;
}




header("Location: index.php");
?>
