<?php 

/* Ahora, para conectar nuestra aplicacion web con una base de datos, usamos PDO */
class Connection {
    static public function connect(){

        #Parametros para PDO: PDO("nombreServidor;nombreBD", "usuario", "contraseña");
        $link = new PDO("mysql:host=localhost;dbname=demo-system",
                        "root",
                        "");
        #Ejecutar caracteres latinos
        $link -> exec("set names utf8");
        return $link;
    }
}
