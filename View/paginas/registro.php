<div class="d-flex justify-content-center text-center">





    <form class="p-5 bg-light" method="post">

        <div class="form-group">
            <label for="nombre">Nombre: </label>
            <!-- Aqui vamos a insertar iconos de FontAwesome, para eso seguimos las instrucciones en la pagina de Bootstrap -->
            <div class="input-group">
                <div class="input-group-prepend">
                    <!-- Aqui copiamos el HTML que nos da el icono de FW, y lo pegamos dentro de la etiqueta <span> -->
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" class="form-control" id="nombre" name="registroNombre">
            </div>
        </div>

        <div class="form-group">
            <label for="email">Email: </label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" id="email" name="registroEmail">
            </div>
        </div>


        <div class="form-group">
            <label for="password">Contraseña: </label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input type="password" class="form-control" id="password" name="registroPassword">
            </div>
        </div>

        <?php 
        /*============================================================
        FORMA EN QUE SE INSTANCIA LA CLASE DE UN METODO NO ESTATICO (PROCEDIMIENTO)
        =============================================================*/
        
        /* Para usar nuestro controlador de formulario (formController.php), creamos un objeto a partir de la clase y guardamos en variable $registro */
        #$registro = new formController();

        /* Y cuando ya tenemos el objeto en una variable, llamamos al metodo ctrRegistro(); del objeto $registro, creado a parti de la clase formController */
        #$registro -> ctrRegistro();


        /*============================================================
        FORMA EN QUE SE INSTANCIA LA CLASE DE UN METODO ESTATICO (FUNCION)
        =============================================================*/

        /* Guardo el metodo de la clase en una variable */
        $registro = formController::ctrRegistro();

        /* Y si quisiera imprimir lo que entra en el campo como el ejemplo de arriba, tendria que hacer un echo a la variable que guarda el metodo */
        #echo $registro;

        if($registro == 'ok'){

            #Codigo JavaScript para refrescar el formulario y las variables POST
            echo '<script>

                if( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
            </script>';


            echo '<div class="alert alert-success">El usuario ha sido registrado.</div>';
        }
        ?>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>