<?php
require_once "Controllers/inmobiliariaController.php";
require_once "Controllers/propiedadController.php";
require_once "Controllers/userController.php";
require_once "Router.php";

$action=$_GET["action"];
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("VER", BASE_URL.'ver');
// define("INMOBILIARIAS_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
// define("PROPIEDADES_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
// define("LOGGIN_URL"loggin');

$r= new Router();

$r->addRoute("add/:ID", "POST","propiedadController","addPropiedad");
$r->addRoute("ver/:ID","GET","propiedadController","showPropiedades");
$r->addRoute("propiedades/:ID","GET","propiedadController","showPropiedades");
$r->addRoute("propiedades/eliminar/:ID", "GET", "propiedadController","deletePropiedad");


$r->setDefaultRoute("inmobiliariaController","showInmobiliarias");

$r->route($_GET['action'],$_SERVER['REQUEST_METHOD']);