<div id="sidebar">
    <div class="inner">
    <?php

session_start();
$varsesion = $_SESSION['admin'];
if($varsesion == null || $varsesion =''){
echo 'No ha Iniciado Sesion';
die();
}

?>

        <!-- Search -->
        <section id="search" class="alt">
        </section>

        <!-- Menu -->
        <nav id="menu">
            <header class="major">
                <h2>Menu</h2>
            </header>
            <table width="100%">
                <tr>
                    <ul>
                        <li class="nav-link" class="nav-item">
                            <a href="../ban/index.php">
                            Banner
                            </a>
                        </li>
                        <li class="nav-link" class="nav-item">
                            <a href="../footer/index.php">
                            Footer
                            </a>
                        </li>
                        <li  class="nav-item">
                            <a class="nav-link" href="../por/index.php">
                            Portafolio
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../som/index.php">
                            Somos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../cerrar_session.php">
                                Cerrar
                            </a>
                        </li>
                    </ul>

                </tr>
            </table>

        </nav>


        <footer id="footer">
            <p class="copyright" align="center">&copy; Todos los derechos reservados ORANGECODE <?php echo date("Y"); ?> <br /></p>
        </footer>

    </div>
</div>