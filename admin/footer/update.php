
<?php 
include("../../conexion.php");

$FOOid=$_POST['FOOid'];
$FOODireccion=$_POST['FOODireccion'];
$FOOTelefono=$_POST['FOOTelefono'];
$FOOCorreo=$_POST['FOOCorreo'];
$FOOFacebook=$_POST['FOOFacebook'];
$FOOLinkedln=$_POST['FOOLinkedln'];
$FOOTwister=$_POST['FOOTwister'];
$FOOInstagram=$_POST['FOOInstagram'];



$sql="UPDATE footer SET FOODireccion = '$FOODireccion',FOOTelefono = '$FOOTelefono',FOOCorreo = '$FOOCorreo',
FOOFacebook = '$FOOFacebook',FOOLinkedln = '$FOOLinkedln', FOOTwister = '$FOOTwister', FOOInstagram = '$FOOInstagram' WHERE FOOid  = '".$_POST["FOOid"]."'";
$resultado = $conexion->query($sql);
$id_insert = $conexion->insert_id;
header("Location: index.php");
?>
