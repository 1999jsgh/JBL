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
                    $id = $_GET['PORid'];
                    $con = "SELECT * FROM portafolio where PORid='" . $id . "'";
                    $act = mysqli_query($conexion, $con);
                    $datos = mysqli_num_rows($act);
                    if ($datos != 0) {
                        $vEmp = mysqli_fetch_row($act);
                        ?>
                        <div class="container">
                            <form class="ap"  method="POST" action="update.php" enctype="multipart/form-data">
                                <h1>Mostrar Portafolio</h1>
                                <input type="hidden" value="<?php echo $id; ?>" name="PORid">
                                <div class="form-group">
                                    <h3>Portafolio</h3>
                                    <textarea name="PORPortafolio" type="text" disabled id="PORPortafolio" placeholder="&#191;En que consiste nuestro portafolio&#63;" class="form-control" required="required" class="form-control"><?php echo $vEmp[1]; ?></textarea>
                                    </br>
                                </div>
                                <div class="form-group">
                                    <h3>Centrarse</h3>
                                    <textarea name="PORCentrarse" type="text" disabled id="PORCentrarse" placeholder="&#191;En que centrarse con nosotros&#63;" class="form-control" required="required" class="form-control"><?php echo $vEmp[2]; ?></textarea>
                                    </br>
                                </div>
                                <div class="col-xs-12">
                                <label>Foto grande del portafolio</label>
                                <img style="width:300px; height:300px;" src="../por/archivos/<?php if ($vEmp['0'] != "") {
                                                                                  echo $vEmp['3'];
                                                                                } else {
                                                                                  echo "default.png";
                                                                                } ?>">
                                </div>
                                <br></br> 
                                <div class="col-xs-12">
                                <label>Foto pequeña del portafolio</label>
                                <img style="width:300px; height:300px;" src="../por/archivos/<?php if ($vEmp['0'] != "") {
                                                                                  echo $vEmp['4'];
                                                                                } else {
                                                                                  echo "default.png";
                                                                                } ?>">
                                </div>
                                <br></br> 
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

