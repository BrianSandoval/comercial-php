<?php
require_once './validar-sesion.php';
require_once '../util/funciones/definiciones.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once './meta.php'; ?>

        <title><?php echo SOFTWARE_TITULO_PAGINA; ?></title>

        <?php
        require_once './estilos.vista.php';
        ?>

        <link rel="icon" href="../imagenes/logousat-ConvertImage.ico">

    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <?php require_once 'menu-titulo.php'; ?>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <?php require_once 'menu-perfil.php'; ?>
                        <!-- /menu profile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <?php require_once '../vista/menu-izquierda.php'; ?>
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->
                        <?php require_once '../vista/menu-abajo.php'; ?>
                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
                <?php require_once '../vista/menu-arriba.php'; ?>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">
                    

                </div>
                <!-- /page content -->

                <!-- footer content -->
                <?php require_once '../vista/pie-pagina.php'; ?>
                <!-- /footer content -->
            </div>
        </div>

        <?php
        require_once './scripts.vista.php';
        ?>


    </body>
</html>