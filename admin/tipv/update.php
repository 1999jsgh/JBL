
<?php

include("../../conexion.php");

$TIPid = $_POST['TIPid'];
$TIPNombre = $_POST['TIPNombre'];



$sql = "UPDATE tipoventas SET TIPNombre = '" . $TIPNombre."' WHERE TIPid =  '" . $_POST["TIPid"] . "'";
$resultado = $conexion->query($sql);
$id_insert = $conexion->insert_id;

header("Location: index.php");
?>
