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
        ?>

        <body>
          <div class="container">
            <div class="btn-group">
              <h1>Gestionar Usuario</h1>
              <div>
                <a href="add.php" class="button big">Agregar</a></p>
              </div>
            </div>
            <table align="center" class="table table-hover">
              <thead class="color">
                <tr align="center">
                  <td>
                    <h3>Mostrar</h3>
                  </td>
                  <td>
                    <h3>Eliminar</h3>
                  </td>
                  <td>
                    <h3>Actualizar</h3>
                  </td>
                  <td>
                    <h3>Nombre de Usuario</h3>
                  </td>
                  <td>
                    <h3>Identificacion</h3>
                  </td>
                  <td>
                    <h3>Correo</h3>
                  </td>
              </thead>
              <?php
              if ($NumUsu != 0) {
                while ($vUsu = mysqli_fetch_row($RSUsu)) {                
              ?>
                  <tbody>
                    <tr align="center">
                      <td class="celd-centrar">
                        <a href="show.php?USUid=<?php echo $vUsu[0] ?>" class="button big">
                          <i class="fas fa-eye"></i>
                        </a>
                      </td>
                      <td>
                        <a href="delete.php?USUid=<?php echo $vUsu[0] ?>" class="button big">
                          <i class="fas fa-trash"></i>
                        </a>
                      </td>
                      <td>
                        <a href="edit.php?USUid=<?php echo $vUsu[0] ?>" class="button big">
                          <i class="fas fa-edit"></i>
                        </a>
                      </td>
                      <td>
                        <div align="center"><?php echo $vUsu[1] ?></div>
                      </td>
                      <td>
                        <div align="center"><?php echo $vUsu[2] ?></div>
                      </td>
                      <td>
                        <div align="center"><?php echo $vUsu[3] ?></div>
                      </td>
                    </tr>
                  </tbody>
              <?php
                }
              }
              ?>
            </table>
        </body>
      </div>
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