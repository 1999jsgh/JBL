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
                    $id = $_GET['NOTid'];
                    $con = "SELECT * FROM noticia where NOTid='" . $id . "'";
                    $act = mysqli_query($conexion, $con);
                    $datos = mysqli_num_rows($act);
                    if ($datos != 0) {
                        $vEmp = mysqli_fetch_row($act);
                        $RSUsu = mysqli_query($conexion, "SELECT * FROM tiponoticia");
                        $NumUsu = mysqli_num_rows($RSUsu);
                        ?>
                        <div class="container">
                            <form class="ap"  method="POST" action="update.php" enctype="multipart/form-data">
                                <h1>Actualizar Noticia</h1>
                                <input type="hidden" value="<?php echo $id; ?>" name="NOTid">
                                <div class="form-group">
                                <h3>Tipo de Noticia</h3>
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
                                    <h3>Fecha</h3>
                                    <input name="NOTFecha" type="date" id="NOTFecha" placeholder="Nombre del Empaque" class="form-control" required="required" class="form-control" value="<?php echo $vEmp[2]; ?>">
                                    </br>
                                </div>
                                <div class="form-group">
                                    <h3>Titulo</h3>
                                    <input name="NOTTitulo" type="text" id="NOTTitulo" placeholder="Nombre del Empaque" class="form-control" required="required" class="form-control" value="<?php echo $vEmp[3]; ?>">
                                    </br>
                                </div>
                                <div class="form-group">
                                    <h3>Descripcion</h3>
                                    <input name="NOTDescripcion" type="text" id="NOTDescripcion" placeholder="Nombre del Empaque" class="form-control" required="required" class="form-control" value="<?php echo $vEmp[4]; ?>">
                                    </br>
                                </div>
                                <div class="col-xs-12">
                                <label>Imagen/Foto</label>
                                    <div class="form-group">
                                        <input type="file" name="NOTFoto">
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
                                    <input name="NOTid" type="hidden" id="NOTid"  value="<?php echo $id; ?>">
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
