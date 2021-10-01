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
            $RSInt = mysqli_query($conexion, "SELECT * FROM interes");
            $NumInt = mysqli_num_rows($RSInt);
            $act = mysqli_query($conexion, $con);
            $datos = mysqli_num_rows($act);
            if ($datos != 0) {
              $vUsu = mysqli_fetch_row($act);
              if ($vUsu[5] == 1) {
                $vUsu[5] = "Masculino";
            } elseif ($vUsu[5] == 2) {
                $vUsu[5] = "Femenino";
            }
            ?>
    
              <body>
                <div class="container">
                  <form class="ap" method="POST" action="update.php" enctype="multipart/form-data">
                    <h1>Mostrar Usuario</h1>
                    <input type="hidden" value="<?php echo $id; ?>" name="USUid">
                    <div class="form-group">
                      <h3>Nombres</h3>
                      <input name="USUNombre"  type="text" id="USUNombre" class="form-control" required="required" value="<?php echo $vUsu[1]; ?>">
                      <br>
                    </div>
                    <div class="form-group">
                      <h3>Identificacion</h3>
                      <input name="USUIdentificacion"  type="text" id="USUIdentificacion" class="form-control" required="required" value="<?php echo $vUsu[2]; ?>">
                      <br>
                    </div>
                    <div class="form-group">
                      <h3>Correo</h3>
                      <input name="USUCorreo"  type="text" id="USUCorreo" class="form-control" required="required" value="<?php echo $vUsu[3]; ?>">
                      <br>
                    </div>
                    <div class="form-group">
                      <h3>Telefono</h3>
                      <input name="USUTelefono"  type="text" id="USUTelefono" class="form-control" required="required" value="<?php echo $vUsu[4]; ?>">
                      <br>
                    </div>
                    <div class="form-group">
                      <h3>Genero del Usuario</h3>
                      <input name="USUSexo"  type="text" id="USUSexo" class="form-control" required="required" value="<?php echo $vUsu[5]; ?>">
                      <br>
                    </div>
                    <input type="hidden" value="<?php echo $id; ?>" name="PEDid">
                                <div class="form-group">
                                    <h3>Interes</h3>
                                    <select name="INTid"  class="form-control">
                                        <?php
                                        if ($NumInt != 0) {
                                            while ($vInt = mysqli_fetch_row($RSInt)) {
                                        ?>
                                                <option value="<?php echo $vInt[0]; ?>" <?php
                                                                                            if ($vInt[0] == $vUsu[6]) {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>><?php echo $vInt[1]; ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                    </br>
                                </div>
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