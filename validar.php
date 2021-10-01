
<?php
require_once 'conexion.php';


$usuario = $_POST['usuario'];
$contraseña = $_POST['clave'];
 session_start();
if ($usuario != '' && $contraseña != '') {
 
 $verUsu="SELECT * FROM usuario WHERE USUNombre='$usuario' AND USUIdentificacion='$contraseña'";
  $act=mysqli_query($conexion, $verUsu);
  $datos=mysqli_num_rows($act);
  if($datos!=0){
    $vUsu=mysqli_fetch_row($act);
  $_SESSION['USUid']=$vUsu[0];
  $_SESSION['USUNombre']=$vUsu[1];
  echo '<script> location.href="../index.php"; </script>';
  }
} else {
  $mensaje = "Ingrese todos los datos.";
  echo '<script>
  alert("' . $mensaje . '");
  location.href="index.php";
</script>';
}

