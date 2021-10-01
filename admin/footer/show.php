<!DOCTYPE HTML>
<!--
        Editorial by HTML5 UP
        html5up.net | @ajlkn
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
  <title>JBL</title>
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="../img/icono.png">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <link rel="stylesheet" href="../assets/css/main.css" />
</head>

<body class="is-preload">

  <!-- Wrapper -->
  <div id="wrapper">

    <!-- Main -->
    <div id="main">
      <div class="inner">

        <!-- Header -->
        <?php
        include '../header.php';
        ?>
        <?php
        include("../../conexion.php");
        $id = $_GET['USUid'];
        $con = "SELECT * FROM usuario WHERE USUid='" . $id . "'";
        $RSFoo = mysqli_query($conexion, "SELECT * FROM footer");
        $NumFoo = mysqli_num_rows($RSFoo);
        $act = mysqli_query($conexion, $con);
        $datos = mysqli_num_rows($act);
        if ($datos != 0) {
        ?>

          <body>
            <div class="container">
              <form class="ap" method="POST" enctype="multipart/form-data">
                <h1>Datos de Footer</h1>
                <input type="hidden" value="<?php echo $id; ?>" name="FOOid">
                <div class="form-group">
                  <h3>Direccion</h3>
                  <input name="USUNombre" disabled type="text" id="USUNombre" class="form-control" required="required" value="<?php echo $vUsu[1]; ?>">
                  <br>
                </div>
                <div class="form-group">
                  <h3>Telefono</h3>
                  <input name="USUIdentificacion" disabled type="text" id="USUIdentificacion" class="form-control" required="required" value="<?php echo $vUsu[2]; ?>">
                  <br>
                </div>
                <div class="form-group">
                  <h3>Correo</h3>
                  <input name="USUCorreo" disabled type="text" id="USUCorreo" class="form-control" required="required" value="<?php echo $vUsu[3]; ?>">
                  <br>
                </div>
                <div class="form-group">
                  <h3>Linkedln</h3>
                  <input name="USUTelefono" disabled type="text" id="USUTelefono" class="form-control" required="required" value="<?php echo $vUsu[4]; ?>">
                  <br>
                </div>
                <div class="form-group">
                  <h3>Genero del Usuario</h3>
                  <input name="USUSexo" disabled type="text" id="USUSexo" class="form-control" required="required" value="<?php echo $vUsu[5]; ?>">
                  <br>
                </div>
                <input type="hidden" value="<?php echo $id; ?>" name="FOOid">
                         
              </form>
            </div>
          </body>
        <?php
        }
        ?>
      </div>
    </div>

    <!-- Sidebar -->
    <?php
    include '../sidebar.php';
    ?>

  </div>

  <!-- Scripts -->
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/browser.min.js"></script>
  <script src="../assets/js/breakpoints.min.js"></script>
  <script src="../assets/js/util.js"></script>
  <script src="../assets/js/main.js"></script>

</body>

</html>