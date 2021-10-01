
<?php

include("../../conexion.php");

$FOOid = $_POST['FOOid'];
$FOONombre = $_POST['FOONombre'];
$FOOCelular = $_POST['FOOCelular'];
$FOOCorreo = $_POST['FOOCorreo'];


$sql = "UPDATE footer SET FOONombre = '" . $FOONombre . "',FOOCelular = '" . $FOOCelular . "',
FOOCorreo = '" . $FOOCorreo . "' WHERE FOOid =  '" . $_POST["FOOid"] . "'";
$resultado = $conexion->query($sql);
$id_insert = $conexion->insert_id;

header("Location: index.php");
?>
