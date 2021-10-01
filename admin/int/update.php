
<?php

include("../../conexion.php");

$INTid = $_POST['INTid'];
$INTNombre = $_POST['INTNombre'];



$sql = "UPDATE interes SET INTNombre = '" . $INTNombre . "' WHERE INTid =  '" . $_POST["INTid"] . "'";
$resultado = $conexion->query($sql);
$id_insert = $conexion->insert_id;

header("Location: index.php");
?>
