<?php

include("../../conexion.php");

$INTNombre = $_POST['INTNombre'];


$sql = "INSERT INTO interes (INTNombre)
VALUES ('$INTNombre')";
$resultado = $conexion->query($sql);
$id_insert = $conexion->insert_id;

header("Location: index.php");
?>
