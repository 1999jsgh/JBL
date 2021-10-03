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
                                <h1>Actualizar Banner</h1>
                                <input type="hidden" value="<?php echo $id; ?>" name="PORid">
                                <div class="form-group">
                                    <h3>Portafolio</h3>
                                    <textarea name="PORPortafolio" type="text"  id="PORPortafolio" placeholder="&#191;En que consiste nuestro portafolio&#63;" class="form-control" required="required" class="form-control"><?php echo $vEmp[1]; ?></textarea>
                                    </br>
                                </div>
                                <div class="form-group">
                                    <h3>Centrarse</h3>
                                    <textarea name="PORCentrarse" type="text"  id="PORCentrarse" placeholder="&#191;En que centrarse con nosotros&#63;" class="form-control" required="required" class="form-control"><?php echo $vEmp[2]; ?></textarea>
                                    </br>
                                </div>
                                <div class="col-xs-12">
                                <label>Foto grande del portafolio</label>
                                    <div class="form-group">
                                        <input type="file" name="PORImagen1">
                                        <p class="text-center text-primary">
                                            No es necesario actualizar la Imagen/Foto del producto, sin embargo si desea actualizarla seleccione una en el siguiente campo. Formato de imágenes admitido png y jpg. Tamaño máximo 5MB</p>
                                    </div>
                                </div>
                                <br></br> 
                                <div class="col-xs-12">
                                <label>Foto pequeña del portafolio</label>
                                    <div class="form-group">
                                        <input type="file" name="PORImagen2">
                                        <p class="text-center text-primary">
                                            No es necesario actualizar la Imagen/Foto del producto, sin embargo si desea actualizarla seleccione una en el siguiente campo. Formato de imágenes admitido png y jpg. Tamaño máximo 5MB</p>
                                    </div>
                                </div>
                                <br></br> 
                                <div class="form-group">
                                    <input type="submit" name="Submit" value="Guardar" class="btn btn-primary" required="required" />
                                </div>
                                <div class="form-group">
                                    <label></label>
                                    <input name="PORid" type="hidden" id="PORid"  value="<?php echo $id; ?>">
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
