
<?php 
include("../../conexion.php");

$USUid=$_POST['USUid'];
$USUNombre=$_POST['USUNombre'];
$USUIdentificacion=$_POST['USUIdentificacion'];
$USUCorreo=$_POST['USUCorreo'];
$USUTelefono=$_POST['USUTelefono'];
$USUSexo=$_POST['USUSexo'];
$INTid=$_POST['INTid'];


$sql="UPDATE usuario SET USUNombre = '$USUNombre',USUIdentificacion = '$USUIdentificacion',USUCorreo = '$USUCorreo',
USUTelefono = '$USUTelefono',USUSexo = '$USUSexo', INTid = '$INTid' WHERE USUid  = '".$_POST["USUid"]."'";
$resultado = $conexion->query($sql);
$id_insert = $conexion->insert_id;

header("Location: index.php");
?>
