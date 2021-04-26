<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="View/style.css">
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

    <!-- AJAX n jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--    Datatables  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css" />
    <!-- Elementos de quiebre de pantalla -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <title>Document</title>
</head>

<body id="verticalMenu">
    <div class="sidebar-container">
        <div class="sidebar-logo">
            Organiza
        </div>
        <ul class="sidebar-navigation">
            <li class="header">Dashboard</li>


            <li>
                <a href="index.php?pagina=inicio">
                    <i class="fa fa-home" aria-hidden="true"></i> Inicio
                </a>
            </li>


            <li class="header">Organizacion</li>

            <li>
                <a href="index.php?pagina=profile">
                    <i class="fa fa-users" aria-hidden="true"></i> Clientes
                </a>
            </li>
            <li>
                <a href="index.php?pagina=profile">
                    <i class="fa fa-calendar-check" aria-hidden="true"></i> Agenda
                </a>
            </li>
            <li>
                <a href="index.php?pagina=profile">
                    <i class="fa fa-list-ul" aria-hidden="true"></i> To Do List
                </a>
            </li>



            <li class="header">Venta y servicio</li>
            <li>
                <a href="index.php?pagina=producto">
                    <i class="fa fa-box-open" aria-hidden="true"></i> Venta producto
                </a>
            </li>
            <li>
                <a href="index.php?pagina=servicio">
                    <i class="fa fa-handshake" aria-hidden="true"></i> Venta servicio
                </a>
            </li>
            <li>
                <a href="index.php?pagina=reporteVenta">
                    <i class="fa fa-chart-area" aria-hidden="true"></i> Reportes
                </a>
            </li>

            <li class="header">COMPRA E INVENTARIO</li>
            <li>
                <a href="index.php?pagina=inventario">
                    <i class="fa fa-boxes" aria-hidden="true"></i> Inventario
                </a>
            </li>
            <li>
                <a href="index.php?pagina=historialInventario">
                    <i class="fa fa-history" aria-hidden="true"></i> Historial
                </a>
            </li>
        </ul>
    </div>






    <div class="content-container pt-0 no-gutters">


        <!-- Ahora agregamos una barra de navegacion para dentro poner una botonera-->
        <div class="container-fluid bg-light" style="padding-left: 0; padding-right:0;  ">


            <!--===============================
            TOPBAR
            ================================-->



            <nav class="navbar navbar-expand-lg navbar-light mb-5" style="background-color: #2574A9;">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
            </nav>











            <!-- Aqui escribimos la botonera de la barra de navegacion -->
            <ul class="nav nav-justified nav-pills">

                <!-- Para que el sitio sea responsivo, debemos ubicar nuestro contenido dentro de contenedores -->
                <div class="container-fluid">











                    <!--===============================
                    CONTENIDO
                    ================================-->
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
                            VENTA
                            ==================================================*/
                        } else if (
                            $_GET["pagina"] == "producto" ||
                            $_GET["pagina"] == "servicio" ||
                            $_GET["pagina"] == "reporteVenta"
                        ) {
                            include "venta/" . $_GET["pagina"] . ".php";


                            /*==================================================
                            COMPRA
                            ==================================================*/
                        } else if (
                            $_GET["pagina"] == "inventario" ||
                            $_GET["pagina"] == "historialInventario"
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