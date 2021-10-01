<!DOCTYPE HTML>

<html>
    <head>
        <title>KAWAL</title>
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
                     $id = $_GET['SIDid'];
                     $con = "SELECT * FROM sidebar where SIDid='" . $id . "'";
                     $act = mysqli_query($conexion, $con);
                     $datos = mysqli_num_rows($act);
                     if ($datos != 0) {
                         $vCli = mysqli_fetch_row($act);
                         ?>
                         <div class="container">
                             <form class="ap"  method="POST" action="update.php" enctype="multipart/form-data">
                                 <h1>Actualizar Sidebar</h1>
                                 <input type="hidden" value="<?php echo $id; ?>" name="SIDid">
                                 <div class="form-group">
                                     <h3>Titulo</h3>
                                     <input name="SIDTitulo" type="text" disabled id="SIDTitulo" placeholder="Nombre del Proveedor" class="form-control" required="required" class="form-control" value="<?php echo $vCli[1]; ?>">
                                     </br>
                                 </div>
                                 <div class="col-xs-12">
                                 <label>Imagen/Foto</label>
                                 <img style="width:300px; height:300px;" src="../sid/archivos/<?php if ($vCli['0'] != "") {
                                                                                  echo $vCli['2'];
                                                                                } else {
                                                                                  echo "default.png";
                                                                                } ?>">                                     
                                 </div>
                                 <br></br>   
                                 <div class="form-group">
                                     <h3>Link</h3>
                                     <input name="SIDLink" type="text" disabled id="SIDLink" placeholder="Nombre del Proveedor" class="form-control" required="required" class="form-control" value="<?php echo $vCli[3]; ?>">
                                     </br>
                                 </div>             
                            </form>
                        </div>
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
