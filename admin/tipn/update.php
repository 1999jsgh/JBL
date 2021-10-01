
<?php

include("../../conexion.php");

$TIPNid = $_POST['TIPNid'];
$TIPNTipoNoticia = $_POST['TIPNTipoNoticia'];



$sql = "UPDATE tiponoticia SET TIPNTipoNoticia = '" . $TIPNTipoNoticia."' WHERE TIPNid =  '" . $_POST["TIPNid"] . "'";
$resultado = $conexion->query($sql);
$id_insert = $conexion->insert_id;

header("Location: index.php");
?>
