<?php

include("../../conexion.php");

$TIPNTipoNoticia = $_POST['TIPNTipoNoticia'];


$sql = "INSERT INTO tiponoticia (TIPNTipoNoticia)
VALUES ('$TIPNTipoNoticia')";
$resultado = $conexion->query($sql);
$id_insert = $conexion->insert_id;

header("Location: index.php");
?>
