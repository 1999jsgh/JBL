<?php

include("../../conexion.php");

$TIPNombre = $_POST['TIPNombre'];


$sql = "INSERT INTO tipoventas (TIPNombre)
VALUES ('$TIPNombre')";
$resultado = $conexion->query($sql);
$id_insert = $conexion->insert_id;

header("Location: index.php");
?>
