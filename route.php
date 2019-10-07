<?php
require_once "Controllers/inmobiliariaController.php";
require_once "Controllers/propiedadController.php";
require_once "Controllers/userController.php";


$action=$_GET["action"];
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
// define("INMOBILIARIAS_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
// define("PROPIEDADES_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
// define("LOGGIN_URL"loggin');

$controller= new inmobiliariaController();
if($action == ''){
    $controller->getInmobiliarias();
}else{
    if (isset($action)){
        $partesURL = explode("/", $action);

        if($partesURL[0] == "tareas"){
            $controller->GetTareas();
        }elseif($partesURL[0] == "insertar") {
            $controller->InsertarTarea();
        }elseif($partesURL[0] == "finalizar") {
            $controller->FinalizarTarea($partesURL[1]);
        }elseif($partesURL[0] == "borrar") {
            $controller->BorrarTarea($partesURL[1]);
        }
    }
}
