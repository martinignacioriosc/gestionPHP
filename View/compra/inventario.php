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


$productos = inventoryController::ctrSelectProduct(null, null);

?>

<div class="container-fluid ">
    <div class="row">

        <div class="col-4">



            <form action="" method="post" class="form">
                <div class="row ">
                    <div class="col-2">
                        <label for="idProducto">Id: </label>
                        <input type="text" name="idProducto" class="form-control" placeholder="ID">
                    </div>

                    <div class="col-10">
                        <label for="nombreProducto">Nombre: </label>
                        <input type="text" name="nombreProducto" class="form-control" placeholder="Nombre de producto">
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-5">
                        <label for="categoriaProducto">Categoria: </label>
                        <select id="inputState" name="categoriaProducto" class="form-control" size="4">
                            <option selected>Elegir...</option>
                            <option>Monitor</option>
                            <option>GPU</option>
                            <option>CPU</option>
                            <option>RAM</option>
                            <option>HDD</option>
                            <option>SSD</option>
                            <option>Fuentes</option>

                        </select>
                    </div>

                    <div class="col-7">
                        <label for="descripcionProducto">Descripcion: </label>
                        <textarea class="form-control" name="descripcionProducto" rows="4"></textarea>
                    </div>

                </div>
                <div class="row">
                    <div class="col-3">
                        <label for="valor">Valor:</label>
                        <input type="text" name="valorProducto" class="form-control" placeholder="Valor">
                    </div>
                    <div class="col-3">
                    </div>
                    <div class="col-3">
                        <button class="btn btn-danger mt-4 p-3" type="reset"> Limpiar</button>
                    </div>
                    <div class="col-3">

                        <?php
                        /* Guardo el metodo de la clase en una variable */
                        $respuesta = inventoryController::ctrAddProduct();

                        /* Y si quisiera imprimir lo que entra en el campo como el ejemplo de arriba, tendria que hacer un echo a la variable que guarda el metodo */
                        #echo $registro;

                        if ($respuesta == 'ok') {

                            #Codigo JavaScript para refrescar el formulario y las variables POST
                            echo '<script>
                                if (window.history.replaceState) {
                                    window.history.replaceState(null, null, window.location.href);
                                }
                            </script>';


                            echo '<div class="alert alert-success">El producto ha sido registrado.</div>';
                        }
                        ?>

                        <button type="submit" class="btn btn-success mt-4 p-3">Añadir</button>


                    </div>
                </div>
            </form>
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

                    <?php foreach ($productos as $key => $value) : ?>
                        <tr>
                            <!--<td></*?php echo ($key + 1); ?></td>-->
                            <td><?php echo $value["idProducto"]; ?></td>
                            <td><?php echo $value["nombre"]; ?></td>
                            <td><?php echo $value["descripcion"]; ?></td>
                            <td><?php echo $value["valor"]; ?></td>
                            <td><?php echo $value["fechaIngreso"]; ?></td>
                            <td><?php echo $value["categoria"]; ?></td>
                            <td>
                                <div class="btn-group">

                                    <div class="px-1">
                                        <a href="index.php?pagina=editar&id=<?php echo $value["idProducto"]; ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                    </div>

                                    <form method="post">
                                        <input type="hidden" value="<?php echo $value["idProducto"]; ?>" name="eliminarRegistro">
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

                                        <?php
                                        $eliminar = new formController();
                                        $eliminar->ctrEliminarRegistro();
                                        ?>
                                    </form>

                                </div>
                            </td>
                        </tr>
                    <?php endforeach ?>

                </tbody>

            </table>
        </div>
    </div>
</div>