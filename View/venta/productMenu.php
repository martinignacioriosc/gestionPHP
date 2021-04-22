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

<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            sdf
        </div>
        <div class="col-6">
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
                            <td><?php echo ($key + 1); ?></td>
                            <td><?php echo $value["nombre"]; ?></td>
                            <td><?php echo $value["email"]; ?></td>
                            <td><?php echo $value["fecha"]; ?></td>
                            <td>
                                <div class="btn-group">

                                    <div class="px-1">
                                        <a href="index.php?pagina=editar&id=<?php echo $value["id"]; ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                    </div>

                                    <form method="post">
                                        <input type="hidden" value="<?php echo $value["id"]; ?>" name="eliminarRegistro">
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

<h1>Inicio</h1>