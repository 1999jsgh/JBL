<?php

include("../../conexion.php");

$FOONombre = $_POST['FOONombre'];
$FOOCelular = $_POST['FOOCelular'];
$FOOCorreo = $_POST['FOOCorreo'];

$sql = "INSERT INTO footer (FOONombre, FOOCelular,FOOCorreo)
VALUES ('$FOONombre','$FOOCelular','$FOOCorreo')";
$resultado = $conexion->query($sql);
$id_insert = $conexion->insert_id;

header("Location: index.php");
?>
