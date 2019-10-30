<?php
require_once "Controllers/inmobiliariaController.php";
require_once "Controllers/propiedadController.php";
require_once "Controllers/userController.php";
require_once "Helpers/user.helper.php";
require_once "Router.php";

$action=$_GET["action"];
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
// define("VER", 'BASE_URL.ver'.'/');
// define("LOGIN", 'BASE_URL.login'.'/');
// define("INMOBILIARIAS_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
// define("PROPIEDADES_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
// define("LOGGIN_URL"loggin');

$r= new Router();

$r->addRoute("verify", "POST", "userController", "verifyUser");
$r->addRoute("login", "GET", "userController", "showLogin");
$r->addRoute("logout", "GET", "inmobiliariaController", "logout");
$r->addRoute("addUser", "POST", "userController", "registracion");

$r->addRoute("addInm", "POST", "inmobiliariaController", "addInmobiliaria");

$r->addRoute("ver","GET","inmobiliariaController","showInmobiliarias");

$r->addRoute("propiedades/:FK","GET","propiedadController","showPropiedades");

$r->addRoute("propiedad/:ID","GET","propiedadController","showPropiedad");

$r->addRoute("add/:ID", "POST","propiedadController","addPropiedad");

$r->addRoute("propiedad/:ID/updateInmo/:IDP","POST","inmobiliariaController","updateInmobiliaria");//me llega mal el id

$r->addRoute("propiedad/:ID/update","POST","propiedadController","updatePropiedad");

$r->addRoute("propiedades/eliminar/:ID/:FK", "GET", "propiedadController","deletePropiedad");

$r->addRoute("inmobiliaria/eliminar/:ID", "GET", "inmobiliariaController","deleteInmobiliaria");//como eliminar la tabla completa de inmobiliarias

$r->setDefaultRoute("inmobiliariaController","showInmobiliarias");

$r->route($_GET['action'],$_SERVER['REQUEST_METHOD']);