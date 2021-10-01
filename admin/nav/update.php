
<?php

include("../../conexion.php");

$NAVid=$_POST['NAVid'];
$imgName=$_FILES['NAVImagen']['name'];
$imgSize=$_FILES['NAVImagen']['size'];
$imgMaxSize=50120;
$RSReq = mysqli_query($conexion, "SELECT * FROM navbar");
$NumReq = mysqli_num_rows($RSReq);

if($imgName!=""){
    if(($imgSize/1024)<=$imgMaxSize){
        chmod('archivos/', 0777);
        $imgFinalName="imagen_".($NumReq+1);
        if(move_uploaded_file($_FILES['REQFoto']['tmp_name'],"archivos/".$imgFinalName)){
            $sql="UPDATE navbar SET NAVImagen = '$NAVImagen' WHERE NAVid= '".$_POST["NAVid"]."'";
            $resultado = $conexion->query($sql);
            $id_insert = $conexion->insert_id;
        }             
    }
}




header("Location: index.php");
?>
