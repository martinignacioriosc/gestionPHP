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
<div class="container-fluid ">
    <div class="row">

        <div class="col-4">



            <form action="" method="POST" class="form" id="examplef">
                <div class="row ">
                    <div class="col">
                        <label for="idProducto">Titulo: </label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="">
                    </div>

                    <div class="col">
                        <label for="nombreProducto">Body: </label>
                        <input type="text" name="body" id="body" class="form-control" placeholder="">
                    </div>

                    <div class="col">
                        <label for="nombreProducto">Author: </label>
                        <input type="text" name="author" id="author" class="form-control" placeholder="">
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


                        <button type="submit" class="btn btn-success mt-4 p-3" id="btn-ingresar">Añadir</button>


                    </div>
                </div>
            </form>

            <script type="text/javascript">
                $(document).on("ready", function() {
                    sendData();
                });

                function sendData() {
                    $('#examplef').submit(function(e) {
                            e.preventDefault();
                            var example = $(this).serialize();
                            console.log(example);
                        });
                    };
            </script>
        </div>





        <div class="col-8">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Valor</th>
                        <th>Fecha ingreso</th>
                        <th>Categoria</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>

            </table>
        </div>
    </div>
</div>