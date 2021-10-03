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
                            <h1>Registrar Portafolio</h1>
                        <div class="form-group">
                                <h3>Portafolio</h3>
                                <textarea name="PORPortafolio" type="text" id="PORPortafolio" placeholder=""  required="required"
                                       class="form-control"> &#191;En que consiste nuestro portafolio&#63; </textarea>
                                </br>
                        </div>
                        <div class="form-group">
                                <h3>Centrarse</h3>
                                <textarea name="PORCentrarse" type="text" id="PORCentrarse" placeholder=""  required="required"
                                       class="form-control"> &#191;En que centrarse con nosotros&#63; </textarea>
                                </br>
                        </div>
                        <div class="form-group">
                            <h3>Foto grande del portafolio</h3>
                            <input name="PORImagen1" type="file" id="PORImagen1"  class="form-control">
                            </br>
                            <br>
                        </div>
                        <div class="form-group">
                            <h3>Foto pequeña del portafolio</h3>
                            <input name="PORImagen2" type="file" id="PORImagen2"  class="form-control">
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