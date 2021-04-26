<?php

if (!isset($_SESSION["validarIngreso"])) {
    echo '<script> 
    window.location = "index.php?pagina=ingreso";
    </script>';
    return;
} else {
    if ($_SESSION["validarIngreso"] != "ok") {
        echo '<script> 
        window.location = "index.php?pagina=ingreso";
        </script>';
        return;
    }
}


?>
<div class="container-fluid">
    <div class="row justify-content-center">




        <form action="" method="post" class="form bg-white p-5" id="examplef">
            <div class="row ">
                <div class="col">
                    <label for="nombre">Nombre producto: </label>
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="">
                </div>

                <div class="col">
                    <label for="descripcion">Descripcion: </label>
                    <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="">
                </div>
            </div>
            <div class="row ">
                <div class="col-4">
                    <label for="valor">Valor: </label>
                    <input type="text" name="valor" id="valor" class="form-control" placeholder="">
                </div>

                <div class="col-8">
                    <label for="categoria">categoria: </label>
                    <select name="categoria" id="categoria" class="form-control" placeholder="">
                        <option>Seleccionar...</option selected>
                        <option>GPU</option>
                        <option>CPU</option>
                        <option>RAM</option>
                        <option>HDD</option>
                        <option>SSD</option>
                        <option>Fuente Poder</option>
                    </select>
                </div>


            </div>

            <div class="row">
                <div class="col-3">
                </div>
                <div class="col-3">
                </div>
                <div class="col-3">
                    <button class="btn btn-danger mt-4 p-3" type="reset"> Limpiar</button>
                </div>
                <div class="col-3">


                    <button type="submit" class="btn btn-success mt-4 p-3" id="submit" name="submit">Añadir</button>


                </div>
            </div>
        </form>

        <script>
            $(document).ready(function() {

                $("#submit").click(function() {


                    var nombre = $("#nombre").val();
                    var descripcion = $("#descripcion").val();
                    var valor = $("#valor").val();
                    var categoria = $("#categoria").val();

                    if (nombre == '' || descripcion == '' || valor == '' || categoria == '') {
                        alert("Please fill all fields.");
                        return false;
                    }

                    $.ajax({
                        type: "POST",
                        url: "../api/insert.php",
                        data: {
                            nombre: nombre,
                            descripcion: descripcion,
                            valor: valor,
                            categoria: categoria
                        },
                        cache: false,
                        success: function(data) {},
                        error: function(xhr, status, error) {
                            console.error(xhr);
                        }
                    });

                });

            });
        </script>
    </div>





    <div class="row justify-content-center">
        <table id="tablaUsuarios" class="table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>id</th>
                    <th>nombre</th>
                    <th>descripcion</th>
                    <th>valor</th>
                    <th>fecha ingreso</th>
                    <th>categoria</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


        <!--    Datatables-->
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>

        <style>
            table.dataTable thead {
                color: cadetblue;
            }

            .dataTable thead .sorting_asc,
            .dataTable thead .sorting_desc,
            .dataTable thead .sorting,
            .dataTable tbody .sorting {
                padding-left: 2.2rem !important;
                padding-top: 0.7rem !important;
                padding-bottom: 0.7rem !important;
                padding-right: 0.75rem !important;
            }
        </style>
        <script>
            $(document).ready(function() {
                $('#tablaUsuarios').DataTable({
                    "ajax": {
                        "url": "../api/read.php",
                        "dataSrc": ""
                    },
                    "columns": [{
                            "data": "idProducto"
                        },
                        {
                            "data": "nombre"
                        },
                        {
                            "data": "descripcion"
                        },
                        {
                            "data": "valor"
                        },
                        {
                            "data": "fechaIngreso"
                        },
                        {
                            "data": "categoria"
                        }
                    ]
                });
            });
        </script>
    </div>
</div>
</div>