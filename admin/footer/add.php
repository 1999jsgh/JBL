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
        $RSUsu = mysqli_query($conexion, "SELECT * FROM usuario");
        $NumUsu = mysqli_num_rows($RSUsu);
        $RSInt = mysqli_query($conexion, "SELECT * FROM interes");
        $NumInt = mysqli_num_rows($RSInt);
        ?>

        <body>
          <div class="container">
            <form class="ap" method="POST" action="insert.php" enctype="multipart/form-data">
              <h1>Registrar Usuario</h1>
              <div class="form-group">
           
              <div class="form-group">
                <h3>Nombres</h3>
                <input name="USUNombre" type="text" id="USUNombre" placeholder="Nombres del Usuario" class="form-control" required="required" class="form-control">
                <br>
              </div>
              <div class="form-group">
                <h3>Identificacion</h3>
                <input name="USUIdentificacion" type="text" id="USUIdentificacion" placeholder="Identificacion del Usuario" class="form-control" required="required" class="form-control">
                <br>
              </div>
              <div class="form-group">
                <h3>Correo</h3>
                <input name="USUCorreo" type="text" id="USUCorreo" placeholder="Correo del Usuario" class="form-control" required="required" class="form-control">
                <br>
              </div>
              <div class="form-group">
                <h3>Telefono</h3>
                <input name="USUTelefono" type="text" id="USUTelefono" placeholder="Telefono del Usuario" class="form-control" required="required" class="form-control">
                <br>
              </div>
              <h3>Genero del Usuario</h3>
                <select name="USUSexo" class="form-control">
                  <option>Seleccionar</option>
                  <option name="USUSexo" id="USUSexo" value="1">Masculino</option> <br />
                  <option name="USUSexo" id="USUSexo" value="2">Femenino</option><br />
                </select>
                <br>
              </div>
              <div class="form-group">
                            <h3>Interes</h3>
                            <select name="INTid" class="form-control">
                                <option>SELECCIONA UN INTERES</option>
                                <?php
                                if ($NumInt != 0) {
                                    while ($vInt = mysqli_fetch_row($RSInt)) {
                                ?>
                                        <option value="<?php echo $vInt[0]; ?>"><?php echo $vInt[1]; ?></option>
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