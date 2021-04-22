<?php
if (isset($_GET["id"])) {

    $item = "id";
    $valor = $_GET["id"];

    $usuario = formController::ctrSeleccionarRegistros($item, $valor);
}
?>

<div class="d-flex justify-content-center text-center">

    <form class="p-5 bg-light" method="post">

        <div class="form-group">
            <!-- Aqui vamos a insertar iconos de FontAwesome, para eso seguimos las instrucciones en la pagina de Bootstrap -->
            <div class="input-group">
                <div class="input-group-prepend">
                    <!-- Aqui copiamos el HTML que nos da el icono de FW, y lo pegamos dentro de la etiqueta <span> -->
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" class="form-control" id="nombre" value="<?php echo $usuario["nombre"]; ?>" placeholder="Escriba su nombre" name="actualizarNombre">
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" id="email" value="<?php echo $usuario["email"]; ?>" placeholder="Escriba su email" name="actualizarEmail">
            </div>
        </div>


        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input type="password" class="form-control" id="password" placeholder="Escriba su contraseña" name="actualizarPassword">
                <input type="hidden" name="passwordActual" value="<?php echo $usuario["password"]; ?>">
                <input type="hidden" name="idUsuario" value="<?php echo $usuario["id"]; ?>">
            </div>
        </div>


        <?php

        $actualizar = formController::ctrActualizarRegistro();
        if ($actualizar == "ok") {

            echo '<script> 
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }

            </script>';

            echo '<div class="alert alert-success"> El usuario ha sido actualizado </div>
            
            <script> 
                setTimeout(function(){

                    window.location = "index.php?pagina=inicio";
                }, 2000);
            </script>';
        }

        ?>


        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>