
<?php

include("../../conexion.php");

$SOMid = $_POST['SOMid'];
$SOMTexto = $_POST['SOMTexto'];


$sql = "UPDATE somos SET SOMTexto = '" . $SOMTexto."' WHERE SOMid =  '" . $_POST["SOMid"] . "'";
$resultado = $conexion->query($sql);
$id_insert = $conexion->insert_id;

header("Location: index.php");
?>
