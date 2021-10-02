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
                    <!-- Content -->
                    <div class="container">
                        <form class="ap" method="post" action="insert.php" enctype="multipart/form-data">
                            <h1>Registrar Banner</h1>
                        <div class="form-group">
                                <h3>Titulo</h3>
                                <input name="BANTitulo" type="text" id="BANTitulo" placeholder="Titulo de la plataforma"  required="required"
                                       class="form-control">
                                </br>
                        </div>
                        <div class="form-group">
                            <h3>Foto del fondo</h3>
                            <input name="BANFondo" type="file" id="BANFondo"  class="form-control">
                            </br>
                            <br>
                        </div>
                        <div class="form-group">
                            <h3>Foto del logo</h3>
                            <input name="BANLogo" type="file" id="BANLogo"  class="form-control">
                            </br>
                            <br>
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