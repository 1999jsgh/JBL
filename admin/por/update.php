
<?php

include("../../conexion.php");

$PORid = $_POST['PORid'];
$PORPortafolio = $_POST['PORPortafolio'];
$PORCentrarse = $_POST['PORCentrarse'];
$PORImagen1=$_FILES['PORImagen1']['name'];
$PORImagen2=$_FILES['PORImagen2']['name'];
$RSReq = mysqli_query($conexion, "SELECT PORid FROM portafolio");
$NumReq = mysqli_fetch_row($RSReq);


if($PORImagen1!="" && $PORImagen2!=""){
        chmod('../por/archivos/', 0777);
        $fondo1="PORImagen1".($PORid).".png";
        $fondo2="PORImagen2".($PORid).".png";
        if(move_uploaded_file($_FILES['PORImagen1']['tmp_name'],"../por/archivos/".$fondo1) && move_uploaded_file($_FILES['PORImagen2']['tmp_name'],"../por/archivos/".$fondo2)){
    
            $sql = "UPDATE portafolio SET PORPortafolio = '" . $PORPortafolio . "',PORCentrarse = '" . $PORCentrarse . "',PORImagen1 = '" . $fondo1 . "',PORImagen2 = '" . $fondo2 . "'  WHERE PORid =  '" . $_POST["PORid"] . "'";
            $resultado = $conexion->query($sql);
            $id_insert = $conexion->insert_id;
    
        }            
}else if($PORImagen1!="" ){
    chmod('../por/archivos/', 0777);
    $fondo1="PORImagen1".($BANid).".png";
    if(move_uploaded_file($_FILES['PORImagen1']['tmp_name'],"../por/archivos/".$fondo1)){
    
        $sql = "UPDATE portafolio SET PORPortafolio = '" . $PORPortafolio . "',PORCentrarse = '" . $PORCentrarse . "',PORImagen1 = '" . $fondo1 . "'  WHERE PORid =  '" . $_POST["PORid"] . "'";
        $resultado = $conexion->query($sql);
        $id_insert = $conexion->insert_id;

    }  
}else if($PORImagen2!="" ){
    chmod('../por/archivos/', 0777);
    $fondo2="PORImagen2".($BANid).".png";
    if(move_uploaded_file($_FILES['PORImagen2']['tmp_name'],"../por/archivos/".$fondo2)){

        $sql = "UPDATE portafolio SET PORPortafolio = '" . $PORPortafolio . "',PORCentrarse = '" . $PORCentrarse . "', PORImagen2 = '" . $fondo2 . "'  WHERE PORid =  '" . $_POST["PORid"] . "'";
            $resultado = $conexion->query($sql);
            $id_insert = $conexion->insert_id;

    }            
}else {
    $sql = "UPDATE portafolio SET PORPortafolio = '" . $PORPortafolio . "' ,PORCentrarse = '" . $PORCentrarse . "'  WHERE PORid =  '" . $_POST["PORid"] . "'";
            $resultado = $conexion->query($sql);
            $id_insert = $conexion->insert_id;
}

header("Location: index.php");
?>
