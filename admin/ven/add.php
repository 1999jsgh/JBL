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
                    include("../../conexion.php");
                    $RSTip = mysqli_query($conexion, "SELECT * FROM tipoventas");
                    $NumTip = mysqli_num_rows($RSTip);
                    
                    ?>

                    <!-- Content -->
                    <div class="container">
                        <form class="ap" method="post" action="insert.php" enctype="multipart/form-data">
                            <h1>Registrar Venta</h1>
                            <div class="form-group">
                            <h3>Tipo de Venta</h3>
                            <select name="TIPid" class="form-control">
                                <option>SELECCIONA UNA OPCI&Oacute;N</option>
                                <?php
                                if ($NumTip != 0) {
                                    while ($vTip = mysqli_fetch_row($RSTip)) {
                                ?>
                                        <option value="<?php echo $vTip[0]; ?>"><?php echo $vTip[1]; ?></option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                            </br>
                        </div>
                        <div class="form-group">
                                <h3>Titulo</h3>
                                <input name="VENTitulo" type="text" id="VENTitulo" placeholder="Nombre de la Venta"  required="required"
                                       class="form-control">
                                </br>
                            </div>
                            <div class="form-group">
                                <h3>Fecha</h3>
                                <input name="VENFecha" type="date" id="VENFecha" placeholder=""  required="required"
                                       class="form-control">
                                </br>
                            </div>
                            <div class="form-group">
                                <h3>Descripcion</h3>
                                <input name="VENDescripcion" type="text" id="VENDescripcion" placeholder="Descripcion de la Venta"  required="required"
                                       class="form-control">
                                </br>
                            </div>
                        
                            <div class="form-group">
                            <h3>Foto</h3>
                            <input name="VENFoto" type="file" id="VENFoto"  class="form-control">
                            </br>
                            <br>
                        </div>
                        <div class="form-group">
                                <h3>Precio</h3>
                                <input name="VENPrecio" type="text" id="VENPrecio" placeholder="Precio de la Venta"  required="required"
                                       class="form-control">
                                </br>
                            </div>
                            <div class="form-group">
                                <h3>Contacto</h3>
                                <input name="VENContacto" type="text" id="VENContacto" placeholder="Contacto de la Venta"  required="required"
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