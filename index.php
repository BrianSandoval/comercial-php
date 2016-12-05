<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Iniciar Sesion</title>

        <!-- Bootstrap -->
        <link href="../util/gentelella/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../util/gentelella/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="..util/gentelella/nprogress/nprogress.css" rel="stylesheet">
        <!-- Animate.css -->
        <link href="../util/gentelella/animate.min.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="../util/gentelella/build/css/custom.min.css" rel="stylesheet">
        <link rel="icon" href="../imagenes/logousat-ConvertImage.ico">
    </head>

    <body class="login">
        <div>
            <a class="hiddenanchor" id="signup"></a>
            <a class="hiddenanchor" id="signin"></a>

            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        <form action="../controlador/Sesion.validar.controlador.php" method="post"> 
                            <!-- get = mandar los datos por el url, visible-->
                            <!-- post = mandar los datos por el url, invisible, mas seguro-->
                            <h1>Iniciar Sesión</h1>
                            <div>
                                <input name="txtEmail" type="email" class="form-control" placeholder="Usuario(email)" required="" autofocus="" />
                                <!--requiered = validar si la caja de texto esta en blanco-->
                            </div>
                            <div>
                                <input name="txtClave" type="password" class="form-control" placeholder="Contraseña" required="" />
                            </div>

                            <div>
                                <!--<a class="btn btn-default submit" href="index.html">Ingresar</a>-->
                                <button type="submit" class="btn btn-success"> Ingresar </button>
                                <!--button = se tiene que implementar con funciones javascrip-->
                                <!--Reset = sirve para limpiar los datos del formulario-->
                                <!--submit = va allamar al archivo que has especificado action-->
                                <a class="reset_pass" href="#">Olvidaste tu constraseña?</a>
                            </div>

                            <div class="clearfix"></div>

                            <div class="separator">
                                <p class="change_link">Nuevo en el sitio?
                                    <a href="#signup" class="to_register"> Crear cuenta </a>
                                </p>

                                <div class="clearfix"></div>
                                <br />

                                <div>
                                    <h1><i class="fa fa-paw"></i> BS </h1>
                                    <p> <?php echo date('Y'); ?> All Rights Reserved.</p>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>

                <div id="register" class="animate form registration_form">
                    <section class="login_content">
                        <form>
                            <h1>Create Account</h1>
                            <div>
                                <input type="text" class="form-control" placeholder="Username" required="" />
                            </div>
                            <div>
                                <input type="email" class="form-control" placeholder="Email" required="" />
                            </div>
                            <div>
                                <input type="password" class="form-control" placeholder="Password" required="" />
                            </div>
                            <div>
                                <a class="btn btn-default submit" href="index.html">Submit</a>
                            </div>

                            <div class="clearfix"></div>

                            <div class="separator">
                                <p class="change_link">Already a member ?
                                    <a href="#signin" class="to_register"> Log in </a>
                                </p>

                                <div class="clearfix"></div>
                                <br />

                                <div>
                                    <h1><i class="fa fa-paw"></i> Bs!</h1>
                                    <p>©<?php echo date('Y'); ?> Brian Sandoval. Privacy and Terms</p>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </body>
</html>