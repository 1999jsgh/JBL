
<?php
require_once 'conexion.php';


$usuario = $_POST['usuario'];
$contraseña = $_POST['clave'];
 session_start();
 
  if($usuario== 'julialozadamartinez@gmail.com' && $contraseña == 'Julia123'){
    
  echo '<script> location.href="admin/index.php"; </script>';
  }
 else {
  $mensaje = "Ingrese todos los datos.";
  echo '<script>
  alert("' . $mensaje . '");
 
</script>';
}

