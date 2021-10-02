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
        $id = $_GET['FOOid'];
        $con = "SELECT * FROM footer WHERE FOOid='" . $id . "'";
        $RSFoo = mysqli_query($conexion, "SELECT * FROM footer");
        $NumFoo = mysqli_num_rows($RSFoo);
        $act = mysqli_query($conexion, $con);
        $datos = mysqli_num_rows($act);
        if ($datos != 0) {
          $vFoo = mysqli_fetch_row($act);
        ?>
    
              <body>
                <div class="container">
                  <form class="ap" method="POST" action="update.php" enctype="multipart/form-data">
                    <h1>Editar Footer</h1>
                    <input type="hidden" value="<?php echo $id; ?>" name="FOOid">
                    <div class="form-group">
                  <h3>Direccion</h3>
                  <input name="FOODireccion" type="text" id="FOODireccion" class="form-control" required="required" value="<?php echo $vFoo[1]; ?>">
                  <br>
                </div>
                <div class="form-group">
                  <h3>Telefono</h3>
                  <input name="FOOTelefono" type="text" id="FOOTelefono" class="form-control" required="required" value="<?php echo $vFoo[2]; ?>">
                  <br>
                </div>
                <div class="form-group">
                  <h3>Correo</h3>
                  <input name="FOOCorreo" type="text" id="FOOCorreo" class="form-control" required="required" value="<?php echo $vFoo[3]; ?>">
                  <br>
                </div>
                <div class="form-group">
                  <h3>Facebook</h3>
                  <input name="FOOFacebook" type="text" id="FOOFacebook" class="form-control" required="required" value="<?php echo $vFoo[4]; ?>">
                  <br>
                </div>
                <div class="form-group">
                  <h3>Linkedln</h3>
                  <input name="FOOLinkedln" type="text" id="FOOLinkedln" class="form-control" required="required" value="<?php echo $vFoo[5]; ?>">
                  <br>
                </div>
                <div class="form-group">
                  <h3>Twitter</h3>
                  <input name="FOOTwister" type="text" id="FOOTwister" class="form-control" required="required" value="<?php echo $vFoo[6]; ?>">
                  <br>
                </div>
                <div class="form-group">
                  <h3>Instagram</h3>
                  <input name="FOOInstagram" type="text" id="FOOInstagram" class="form-control" required="required" value="<?php echo $vFoo[7]; ?>">
                  <br>
                </div>
                    <input type="hidden" value="<?php echo $id; ?>" name="FOOid">         
                <div class="form-group">
                  <input type="submit" name="Submit" value="Guardar" class="btn btn-primary" required="required" />
                </div>
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