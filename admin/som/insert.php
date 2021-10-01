<?php

include("../../conexion.php");

$SOMTexto = $_POST['SOMTexto'];


$sql = "INSERT INTO somos (SOMTexto)
VALUES ('$SOMTexto')";
$resultado = $conexion->query($sql);
$id_insert = $conexion->insert_id;

header("Location: index.php");
?>
