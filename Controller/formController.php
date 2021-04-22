<?php
class formController
{




    /*==================================================
    CREAR REGISTRO
    ==================================================*/
    static public function ctrRegistro()
    {
        if (isset($_POST['registroNombre'])) {
            /* Creo una variable que guarde el nombre de la tabla */
            $tabla = "registros";

            /* Y aca creo un array que contiene 3 datos juntos. */
            $datos = array(
                "nombre" => $_POST["registroNombre"],
                "email" => $_POST["registroEmail"],
                "password" => $_POST["registroPassword"]
            );

            #Ya tenemos los parametros que pasaremos al modelo. Ahora los pasaremos instanciando el metodo estatico del modelo
            $respuesta = formModel::modelRegistro($tabla, $datos);

            return $respuesta;
        }
    }


    /*==================================================
    SELECCIONAR REGISTROS
    ==================================================*/
    static public function ctrSeleccionarRegistros($item, $valor)
    {

        $tabla = "registros";

        $respuesta = formModel::mdlSeleccionarRegistros($tabla, $item, $valor);

        return $respuesta;
    }




    /*==================================================
    ACTUALIZAR REGISTRO
    ==================================================*/
    static public function ctrActualizarRegistro()
    {
        if (isset($_POST['actualizarNombre'])) {
            if ($_POST['actualizarPassword'] !=  "") {

                $password = $_POST['actualizarPassword'];
            } else {
                $password = $_POST['passwordActual'];
            }


            $tabla = "registros";

            $datos = array(
                "id" => $_POST["idUsuario"],
                "nombre" => $_POST["actualizarNombre"],
                "email" => $_POST["actualizarEmail"],
                "password" => $password
            );

            #Ya tenemos los parametros que pasaremos al modelo. Ahora los pasaremos instanciando el metodo estatico del modelo
            $respuesta = formModel::mdlActualizarRegistro($tabla, $datos);

            return $respuesta;
        }
    }







    /*==================================================
    INGRESAR
    ==================================================*/
    public function ctrIngreso()
    {
        if (isset($_POST["ingresoEmail"])) {

            $tabla = "registros";
            $item = "email";
            $valor = $_POST["ingresoEmail"];


            $respuesta = formModel::mdlSeleccionarRegistros($tabla, $item, $valor);

            if (
                $respuesta["email"] == $_POST["ingresoEmail"] &&
                $respuesta["password"] == $_POST["ingresoPassword"]
            ) {
                $_SESSION["validarIngreso"] = "ok";

                echo '<script>

                if( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }

                window.location = "index.php?pagina=inicio";
            </script>';
            } else {
                echo '<script>

                if( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
            </script>';


                echo '<div class="alert alert-danger">Error al ingresar al sistema. El email o la contraseña no coinciden.</div>';
            }
        }
    }


    /*==================================================
    ELIMINAR REGISTRO
    ==================================================*/
    public function ctrEliminarRegistro()
    {
        if (isset($_POST["eliminarRegistro"])) {

            $tabla = "registros";
            $valor = $_POST["eliminarRegistro"];

            $respuesta = formModel::mdlEliminarRegistro($tabla, $valor);

            if ($respuesta == "ok") {
                echo '<script>

                if( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }

                window.location = "index.php?pagina=inicio";
            </script>';
            }
        }
    }
}
