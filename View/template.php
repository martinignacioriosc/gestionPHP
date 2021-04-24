<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="View/style.css">
    <!-- Bootstrap 4.3.1 compiled and minified CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- AJAX n jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <!--JQuery library-->
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <!--Popper JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <!--Latest compiled Javascript-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!--Latest compiled FontAwesome -->
    <script src="https://kit.fontawesome.com/e387528569.js" crossorigin="anonymous"></script>

    <!-- Elementos de quiebre de pantalla -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <title>Document</title>
</head>

<body id="verticalMenu">
    <div class="sidebar-container">
        <div class="sidebar-logo">
            Gestor de informacion
        </div>
        <ul class="sidebar-navigation">
            <li class="header">Dashboard</li>

            <?php if (isset($_GET["pagina"])) : ?>
                <!-- CONDICIONAL PARA ENTRAR A PAGINA REGISTRO -->
                <?php if ($_GET["pagina"] == "registro") : ?>
                    <!-- Boton de registro para registrar informacion a base de datos -->
                    <li>
                        <a href="index.php?pagina=inicio">
                            <i class="fa fa-home" aria-hidden="true"></i> Inicio
                        </a>
                    </li> <?php else : ?>
                    <li>
                        <a href="index.php?pagina=inicio">
                            <i class="fa fa-home" aria-hidden="true"></i> Inicio
                        </a>
                    </li>
                <?php endif ?>
            <?php endif ?>

            <li class="header">Mi cuenta</li>
            <?php if (isset($_GET["pagina"])) : ?>
                <!-- CONDICIONAL PARA ENTRAR A PAGINA REGISTRO -->
                <?php if ($_GET["pagina"] == "profile") : ?>
                    <!-- Boton de registro para registrar informacion a base de datos -->
                    <li>
                        <a href="index.php?pagina=profile">
                            <i class="fa fa-user" aria-hidden="true"></i> Perfil
                        </a>
                    </li> <?php else : ?>
                    <li>
                        <a href="index.php?pagina=profile">
                            <i class="fa fa-user" aria-hidden="true"></i> Perfil
                        </a>
                    </li>
                <?php endif ?>



                <!-- CONDICIONAL PARA ENTRAR A PAGINA REGISTRO -->
                <?php if ($_GET["pagina"] == "settings") : ?>
                    <!-- Boton de registro para registrar informacion a base de datos -->
                    <li>
                        <a href="index.php?pagina=settings">
                            <i class="fa fa-cog" aria-hidden="true"></i> Ajustes
                        </a>
                    </li> <?php else : ?>
                    <li>
                        <a href="index.php?pagina=settings">
                            <i class="fa fa-cog" aria-hidden="true"></i> Ajustes
                        </a>
                    </li>
                <?php endif ?>

                <?php if ($_GET["pagina"] == "salir") : ?>
                    <!-- Boton de registro para registrar informacion a base de datos -->
                    <li>
                        <a href="index.php?pagina=salir">
                            <i class="fa fa-close" aria-hidden="true"></i> Logout
                        </a>
                    </li> <?php else : ?>
                    <li>
                        <a href="index.php?pagina=salir">
                            <i class="fa fa-close" aria-hidden="true"></i> Logout
                        </a>
                    </li>
                <?php endif ?>
            <?php endif ?>





            <li class="header">Venta y servicio</li>
            <li>
                <a href="index.php?pagina=inventario">
                    <i class="fa fa-box-open" aria-hidden="true"></i> Productos
                </a>
            </li>
            <li>
                <a href="index.php?pagina=inventario">
                    <i class="fa fa-handshake" aria-hidden="true"></i> Servicios
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-chart-area" aria-hidden="true"></i> Reportes
                </a>
            </li>

            <li class="header">COMPRA E INVENTARIO</li>
            <li>
                <a href="#">
                    <i class="fa fa-boxes" aria-hidden="true"></i> Inventario
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-history" aria-hidden="true"></i> Historial
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-plus-square" aria-hidden="true"></i> Agregar
                </a>
            </li>
        </ul>
    </div>

    <!--===============================
     CONTENIDO
    ================================-->

    <div class="content-container">

        <!--=======================================================
        TOP BAR
        ==========================================================-->

        <!-- Ahora agregamos una barra de navegacion para dentro poner una botonera-->
        <div class="container-fluid bg-light">
            <!-- Aqui escribimos la botonera de la barra de navegacion -->
            <ul class="nav nav-justified py-2 nav-pills">

                <!-- Para que el sitio sea responsivo, debemos ubicar nuestro contenido dentro de contenedores -->
                <div class="container-fluid">
                    <!-- py = padding y -->
                    <!-- Llamo  a mi pagina inicio.php, con la funcion include() -->
                    <?php

                    #ISSET: isset() Determina si una variable esta definida y no es NULL
                    if (isset($_GET["pagina"])) {
                        /*==================================================
                                CUENTA
                                ==================================================*/
                        if (
                            $_GET["pagina"] == "profile" ||
                            $_GET["pagina"] == "settings" ||
                            $_GET["pagina"] == "salir"
                        ) {
                            include "cuenta/" . $_GET["pagina"] . ".php";






                            /*==================================================
                                COMPRA
                                ==================================================*/
                        } else if (
                            $_GET["pagina"] == "inventario"
                        ) {
                            include "compra/" . $_GET["pagina"] . ".php";







                            /*==================================================
                                  PAGINAS
                                ==================================================*/
                        } else if (
                            /* Hacemos todas las comparaciones dentro de un mismo if, ya que finalmente la variable se llama igual, pero el resultado es el que cambia */
                            $_GET["pagina"] == "registro" ||
                            $_GET["pagina"] == "ingreso" ||
                            $_GET["pagina"] == "inicio" ||
                            $_GET["pagina"] == "editar"
                        ) {
                            /* Aqui le decimos que en caso de que la variable contenga un valor valido (validado dentro del if), llamaremos a la pagina correspondiente */
                            include "paginas/" . $_GET["pagina"] . ".php";/* Aqui le concatenamos la ruta inicial, el valor de la variable que corresponde a la pagina, y la extension .php */







                            /*==================================================
                                ERROR 404
                                ==================================================*/
                        } else {
                            /* Inlcuimos una pagina por defecto cuando la ruta solicitada no este en nuestro sistema */
                            include "paginas/error404.php";
                        }
                    } else {
                        include_once "paginas/registro.php";
                    }

                    ?>
                </div>

        </div>
    </div>
</body>

</html>