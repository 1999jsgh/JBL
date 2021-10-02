
<?php

include("../../conexion.php");

$BANid = $_POST['BANid'];
$BANTitulo = $_POST['BANTitulo'];
$BANFondo=$_FILES['BANFondo']['name'];
$BANLogo=$_FILES['BANLogo']['name'];
$RSReq = mysqli_query($conexion, "SELECT BANid FROM banner");
$NumReq = mysqli_fetch_row($RSReq);


if($BANFondo!="" && $c!=""){
        chmod('../ban/archivos/', 0777);
        $fondoFondo="BANFondo_update".($BANid).".png";
        $fondoLogo="BANLogo_update".($BANid).".png";
        if(move_uploaded_file($_FILES['BANFondo']['tmp_name'],"../ban/archivos/".$fondoFondo) && move_uploaded_file($_FILES['BANLogo']['tmp_name'],"../ban/archivos/".$fondoLogo)){
    
            $sql = "UPDATE banner SET BANTitulo = '" . $BANTitulo . "',BANFondo = '" . $fondoFondo . "',BANLogo = '" . $fondoLogo . "'  WHERE BANid =  '" . $_POST["BANid"] . "'";
            $resultado = $conexion->query($sql);
            $id_insert = $conexion->insert_id;
    
        }            
}else if($BANFondo!="" ){
    chmod('../ban/archivos/', 0777);
    $fondoFondo="BANFondo_update".($BANid).".png";
    if(move_uploaded_file($_FILES['BANFondo']['tmp_name'],"../ban/archivos/".$fondoFondo)){
    
        $sql = "UPDATE banner SET BANTitulo = '" . $BANTitulo . "',BANFondo = '" . $fondoFondo . "' WHERE BANid =  '" . $_POST["BANid"] . "'";
        $resultado = $conexion->query($sql);
        $id_insert = $conexion->insert_id;

    }  
}else if($BANLogo!="" ){
    chmod('../ban/archivos/', 0777);
    $fondoLogo="BANLogo_update".($BANid).".png";
    if(move_uploaded_file($_FILES['BANLogo']['tmp_name'],"../ban/archivos/".$fondoLogo)){

        $sql = "UPDATE banner SET BANTitulo = '" . $BANTitulo . "',BANLogo = '" . $fondoLogo . "'  WHERE BANid =  '" . $_POST["BANid"] . "'";
        $resultado = $conexion->query($sql);
        $id_insert = $conexion->insert_id;

    }            
}else {
    $sql = "UPDATE banner SET BANTitulo = '" . $BANTitulo . "' WHERE BANid =  '" . $_POST["BANid"] . "'";
            $resultado = $conexion->query($sql);
            $id_insert = $conexion->insert_id;
}

header("Location: index.php");
?>
