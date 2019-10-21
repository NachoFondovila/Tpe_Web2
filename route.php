<?php
require_once "Controllers/inmobiliariaController.php";
require_once "Controllers/propiedadController.php";
require_once "Controllers/userController.php";
require_once "Router.php";

$action=$_GET["action"];
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("VER", 'BASE_URL.ver'.'/');
define("LOGIN", 'BASE_URL.login'.'/');
// define("INMOBILIARIAS_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
// define("PROPIEDADES_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
// define("LOGGIN_URL"loggin');

$r= new Router();

$r->addRoute("login", "GET", "userController", "showLogin");
$r->addRoute("login/verify", "POST", "userController", "verifyUser");

$r->addRoute("ver/:ID/:FK","GET","propiedadController","showPropiedades");
$r->addRoute("propiedades/:ID","GET","propiedadController","showPropiedades");
$r->addRoute("add/:ID", "POST","propiedadController","addPropiedad");
$r->addRoute("propiedades/eliminar/:ID/:FK", "GET", "propiedadController","deletePropiedad");


$r->setDefaultRoute("inmobiliariaController","showInmobiliarias",":ID");

$r->route($_GET['action'],$_SERVER['REQUEST_METHOD']);