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
                    $id = $_GET['BANid'];
                    $con = "SELECT * FROM banner where BANid='" . $id . "'";
                    $act = mysqli_query($conexion, $con);
                    $datos = mysqli_num_rows($act);
                    if ($datos != 0) {
                        $vEmp = mysqli_fetch_row($act);
                        ?>
                        <div class="container">
                            <form class="ap"  method="POST" action="update.php" enctype="multipart/form-data">
                                <h1>Actualizar Banner</h1>
                                <input type="hidden" value="<?php echo $id; ?>" name="BANid">
                                <div class="form-group">
                                    <h3>Titulo</h3>
                                    <input name="BANTitulo" type="text" id="BANTitulo" placeholder="Titulo de la plataforma" class="form-control" required="required" class="form-control" value="<?php echo $vEmp[1]; ?>">
                                    </br>
                                </div>
                                <div class="col-xs-12">
                                <label>Foto del fondo</label>
                                    <div class="form-group">
                                        <input type="file" name="BANFondo">
                                        <p class="text-center text-primary">
                                            No es necesario actualizar la Imagen/Foto del producto, sin embargo si desea actualizarla seleccione una en el siguiente campo. Formato de imágenes admitido png y jpg. Tamaño máximo 5MB</p>
                                    </div>
                                </div>
                                <br></br> 
                                <div class="col-xs-12">
                                <label>Foto del logo</label>
                                    <div class="form-group">
                                        <input type="file" name="BANLogo">
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
                                    <input name="BANid" type="hidden" id="BANid"  value="<?php echo $id; ?>">
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
