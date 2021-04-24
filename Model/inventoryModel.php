<?php
require_once "./config/connection.php";

class inventoryModel
{
    /*============================================================
    CREAR PRODUCTO
    ============================================================*/

    static public function mdlAddProduct($tabla, $datos)
    {
        #statement, stmt, declaracion, sentencia.
        $statement = Connection::connect()->prepare("INSERT INTO $tabla(idProducto, nombre, descripcion, valor, categoria) VALUES (:idProducto, :nombre, :descripcion, :valor, :categoria)"); #con -> prepare(), preparamos la sentencia
        #para ser ejecutada por el metodo PDOStatement::execute();
        #esto previene inyecciones SQL
        #bindParam() Vincula una variable de PHP a un parametro de sustitucion (:parametro) con nombre o de signo de interrogacion correspondiente
        #            de la sentencia SQL que fue usada para preparar la sentencia.
        #parametro a sustituir #dato de sustitucion #tipo de dato de sustitucion 
        $statement->bindParam(":idNombre", $datos["idNombre"], PDO::PARAM_INT);
        $statement->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $statement->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_LOB);
        $statement->bindParam(":valor", $datos["valor"], PDO::PARAM_INT);
        $statement->bindParam(":categoria", $datos["categoria"], PDO::PARAM_STR);
        if ($statement->execute()) {
            return "ok";
        } else {
            print_r(Connection::connect()->errorInfo());
        }
        #cerramos cualquier conexion que quede
        $statement->closeCursor();

        $statement = null;
    }


    /*==================================================
    SELECCIONAR REGISTROS
    ==================================================*/
    static public function mdlSelectProduct($tabla, $item, $valor)
    {
        if ($item == null && $valor == null) {
            $statement = Connection::connect()->prepare("SELECT *, DATE_FORMAT(fechaIngreso, '%d/%m/%Y') AS fecha FROM $tabla ORDER BY idProducto DESC");
            $statement->execute();

            return $statement->fetchAll();


        } else{
            $statement = Connection::connect()->prepare("SELECT *, DATE_FORMAT(fechaIngreso, '%d/%m/%Y') AS fecha FROM $tabla WHERE $item = :$item ORDER BY idProducto DESC");
            $statement->bindParam(":".$item, $valor, PDO::PARAM_STR);

            
            $statement->execute();

            return $statement->fetch();


        }


        $statement = null;
    }


    
    /*==================================================
    ACTUALIZAR REGISTROS
    ==================================================*/
    static public function mdlUpdateProduct($tabla, $datos)
    {
            $statement = Connection::connect()->prepare("UPDATE $tabla SET nombre=:nombre, email=:email, password=:password WHERE id = :id");
            $statement->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
            $statement->bindParam(":email", $datos["email"], PDO::PARAM_STR);
            $statement->bindParam(":password", $datos["password"], PDO::PARAM_STR);
            $statement->bindParam(":id", $datos["id"], PDO::PARAM_INT);

            $statement->execute();

            $statement->fetch();

            return "ok";
        }



    /*==================================================
    ELIMINAR REGISTROS
    ==================================================*/
    static public function mdlDeleteProduct($tabla, $valor)
    {
            $statement = Connection::connect()->prepare("DELETE FROM $tabla WHERE id = :id");
            $statement->bindParam(":id", $valor, PDO::PARAM_STR);

            if($statement->execute()){
                return "ok";
            }else {
                print_r(Connection::connect()->errorInfo());
            }
        
            
        }

}
?>
