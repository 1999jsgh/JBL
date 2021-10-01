<!DOCTYPE HTML>

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

                <!-- Content -->
                <?php
                include("../../conexion.php");
                $RSEmp = mysqli_query($conexion, "SELECT * FROM noticia");
                $NumEmp = mysqli_num_rows($RSEmp);
                $RSTip = mysqli_query($conexion, "SELECT * FROM tiponoticia");
                $NumTip = mysqli_num_rows($RSTip);
                ?>
                <div class="container">
                    <div class="btn-group">
                        <h1>Gestionar Noticia</h1>
                        <div>
                            <a href="add.php" class="button big">Agregar</a></p>
                        </div>
                    </div>
                    <table align="center" class="table table-hover">
                        <thead class="color">
                            <tr>
                            <td align="center">
                                    <h3>Mostrar</h3>
                                </td>
                                <td align="center">
                                    <h3>Eliminar</h3>
                                </td>
                                <td align="center">
                                    <h3>Actualizar </h3>
                                </td>
                                <td align="center">
                                    <h3>Tipo de Noticia </h3>
                                </td>
                                <td align="center">
                                    <h3>Fecha </h3>
                                </td>
                                <td align="center">
                                    <h3>Titulo </h3>
                                </td>
                            </tr>
                        </thead>
                        <?php
                        if ($NumEmp != 0) {
                            while ($vEmp = mysqli_fetch_row($RSEmp)) {
                                $RSPro = mysqli_query($conexion, "SELECT * FROM tiponoticia WHERE TIPNid = '" . $vEmp[1] . "'");
                                $NumPro = mysqli_num_rows($RSPro);
                                if ($NumPro != 0) {
                                    $vPro = mysqli_fetch_row($RSPro);
                                }
                        ?>
                                <tbody>
                                    <tr>
                                    <td align="center">
                                            <a href="show.php?NOTid=<?php echo $vEmp[0] ?>" class="button big">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </td>
                                        <td align="center">
                                            <a href="delete.php?NOTid=<?php echo $vEmp[0] ?>" class="button big">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                        <td align="center">
                                            <a href="edit.php?NOTid=<?php echo $vEmp[0] ?>" class="button big">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </td>
                                        <td align="center">
                                            <div align="center"><?php echo $vPro[1] ?></div>
                                        </td>
                                        <td align="center">
                                            <div align="center"><?php echo $vEmp[2] ?></div>
                                        </td>
                                        <td align="center">
                                            <div align="center"><?php echo $vEmp[3] ?></div>
                                        </td>
                                       
                                    </tr>
                                </tbody>
                        <?php
                            }
                        }
                        ?>
                    </table>
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