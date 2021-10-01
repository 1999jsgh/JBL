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
                    $id = $_GET['VENid'];
                    $con = "SELECT * FROM venta where VENid='" . $id . "'";
                    $act = mysqli_query($conexion, $con);
                    $datos = mysqli_num_rows($act);
                    if ($datos != 0) {
                        $vEmp = mysqli_fetch_row($act);
                        $RSUsu = mysqli_query($conexion, "SELECT * FROM tipoventas");
                        $NumUsu = mysqli_num_rows($RSUsu);
                        ?>
                        <div class="container">
                            <form class="ap"  method="POST" action="update.php" enctype="multipart/form-data">
                                <h1>Actualizar Venta</h1>
                                <input type="hidden" value="<?php echo $id; ?>" name="VENid">
                                <div class="form-group">
                                <h3>Tipo de Venta</h3>
                                <select name="TIPNid" class="form-control">
                                <?php 
                                    if($NumUsu!=0)
                                    {
                                        while ($vUsu = mysqli_fetch_row($RSUsu)) {
                                ?>
                                    <option value="<?php echo $vUsu[0]; ?>"><?php echo $vUsu[1]; ?></option>
                                <?php 
                                    }
                                }
                                ?>
                                </select>
                                <br>
                                 </div>
                                <div class="form-group">
                                    <h3>Titulo</h3>
                                    <input name="VENTitulo" type="text" id="VENTitulo" disabled placeholder="Nombre del Empaque" class="form-control" required="required" class="form-control" value="<?php echo $vEmp[2]; ?>">
                                    </br>
                                </div>
                                <div class="form-group">
                                    <h3>Fecha</h3>
                                    <input name="VENFecha" type="date" id="VENFecha" disabled placeholder="Nombre del Empaque" class="form-control" required="required" class="form-control" value="<?php echo $vEmp[3]; ?>">
                                    </br>
                                </div>
                                <div class="form-group">
                                    <h3>Descripcion</h3>
                                    <input name="VENDescripcion" type="text" id="VENDescripcion" disabled placeholder="Nombre del Empaque" class="form-control" required="required" class="form-control" value="<?php echo $vEmp[4]; ?>">
                                    </br>
                                </div>
                                <div class="col-xs-12">
                                <label>Imagen/Foto</label>
                                <img style="width:300px; height:300px;" src="../ven/archivos/<?php if ($vEmp['0'] != "") {
                                                                                  echo $vEmp['5'];
                                                                                } else {
                                                                                  echo "default.png";
                                                                                } ?>">
                                </div>
                                <br></br> 
                                <div class="form-group">
                                    <h3>Precio</h3>
                                    <input name="VENPrecio" type="text" id="VENPrecio" disabled placeholder="Nombre del Empaque" class="form-control" required="required" class="form-control" value="<?php echo $vEmp[6]; ?>">
                                    </br>
                                </div>
                                <div class="form-group">
                                    <h3>Contacto</h3>
                                    <input name="VENContacto" type="text" id="VENContacto" disabled placeholder="Nombre del Empaque" class="form-control" required="required" class="form-control" value="<?php echo $vEmp[7]; ?>">
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

