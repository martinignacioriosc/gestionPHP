<?php
class inventoryController
{




    /*==================================================
    CREAR PRODUCTO
    ==================================================*/
    static public function ctrAddProduct()
    {
        if (isset($_POST['idProducto'])) {
            /* Creo una variable que guarde el nombre de la tabla */
            $tabla = "productos";

            $datos = array(
                "idProducto" => $_POST["idProducto"],
                "nombre" => $_POST["nombreProducto"],
                "descripcion" => $_POST["descripcionProducto"],
                "valor" => $_POST["valorProducto"],
                "categoria" => $_POST["categoriaProducto"]
            );

            #Ya tenemos los parametros que pasaremos al modelo. Ahora los pasaremos instanciando el metodo estatico del modelo
            $respuesta = inventoryModel::mdlAddProduct($tabla, $datos);

            return $respuesta;
        }
    }


    /*==================================================
    SELECCIONAR REGISTROS
    ==================================================*/
    static public function ctrSelectProduct($item, $valor)
    {

        $tabla = "productos";

        $respuesta = inventoryModel::mdlSelectProduct($tabla, $item, $valor);

        return $respuesta;
    }




    /*==================================================
    ACTUALIZAR REGISTRO
    ==================================================*/
    static public function ctrUpdateProduct()
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
    ELIMINAR REGISTRO
    ==================================================*/
    public function ctrDeleteProduct()
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
}
