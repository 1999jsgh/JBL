
<!-- Header -->
<?php

session_start();
$varsesion = $_SESSION['admin'];
if($varsesion == null || $varsesion =''){
echo 'No ha Iniciado Sesion';
die();
}

?>
<header id="header">
    <a href="../index.php" class="logo"><strong>JBL</strong> 	</a>
</header>
