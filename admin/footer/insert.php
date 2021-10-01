<?php 
include("../../conexion.php");

$USUNombre=$_POST['USUNombre'];
$USUIdentificacion=$_POST['USUIdentificacion'];
$USUCorreo=$_POST['USUCorreo'];
$USUTelefono=$_POST['USUTelefono'];
$USUSexo=$_POST['USUSexo'];
$INTid=$_POST['INTid'];

$sql = "INSERT INTO usuario (USUNombre,USUIdentificacion,USUCorreo,USUTelefono,USUSexo,INTid) 
VALUES ('$USUNombre','$USUIdentificacion','$USUCorreo','$USUTelefono','$USUSexo','$INTid')";
$resultado = $conexion->query($sql);
$id_insert = $conexion->insert_id;

header("Location: index.php");
?>