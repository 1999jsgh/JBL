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

                    <div class="container">
                        <form class="ap" method="post" action="insert.php" enctype="multipart/form-data">
                            <h1>Registrar Sidebar</h1>
                            <div class="form-group">
                                <h3>Titulo</h3>
                                <input name="SIDTitulo" type="text" id="SIDTitulo" placeholder=""  required="required"
                                       class="form-control">
                                </br>
                            </div>
                        
                            <div class="col-xs-12">
                            <label>Imagen/Foto</label>
                                <p class="text-center text-primary">
                                    Seleccione una imagen/foto en el siguiente campo. Formato de imágenes admitido png y jpg. Tamaño máximo 5MB
                                </p>
                            <div class="form-group">
                            <input type="file" name="SIDImagen">
                            </div>
                            </div>		        
                           <br></br>
                           <div class="form-group">
                                <h3>Link</h3>
                                <input name="SIDLink" type="text" id="SIDLink" placeholder=""  required="required"
                                       class="form-control">
                                </br>
                            </div>
                          
                            <div class="form-group">
                                <input type="submit" name="Submit" value="Guardar" class="btn btn-primary" required="required" />
                            </div>
                        </form>
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