<?php
#INDEX: En el index mostraremos la salida de las vistas al usuario y tambien a traves de el envairemos las distinas acciones que el usuario envie al controlador

#Un metodo que esta en el controlador, necesita usar una funcion de JavaScript llama require

/* require() establece que el codigo del archivo invocado es requerido, es decir, obligatorio para el funcionamiento del programa. Por ello, si el archivo
especificado en la funcion require() no se encuentra, saltara un error "PHP Fatal error" y el programa PHP se detendra*/

/* require_once() funciona de la misma forma que su respectivo, salo que, al utilizar la version _once, se impide la carga de un mismo archivo mas de una vez.*/

#Con esto ya podemos obtener el controlador requerido y usar su contenido
require_once "Controller/templateController.php";
require_once "Controller/formController.php";
require_once "Controller/inventoryController.php";
require_once "Model/formModel.php";
require_once "Model/inventoryModel.php";

$connection = Connection::connect();

#Ahora vamos a instanciar la clase del controlador, y lo guardaremos en una variable
$template = new TemplateController();

#y ahora llamamos al metodo de la clase TemplateController
$template -> ctrGetTemplate();



?>