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

$r->addRoute("verify", "POST", "userController", "verifyUser");//anda
$r->addRoute("login", "GET", "userController", "showLogin");
$r->addRoute("logout", "GET", "inmobiliariaController", "logout");
$r->addRoute("addUser", "POST", "userController", "registracion");

$r->addRoute("addInm", "POST", "inmobiliariaController", "addInmobiliaria");//anda

$r->addRoute("ver","GET","inmobiliariaController","showInmobiliarias");//anda

$r->addRoute("inmobiliaria/:FK","GET","propiedadController","showPropiedades");//anda

$r->addRoute("propiedad/:ID","GET","propiedadController","showPropiedad");//anda

$r->addRoute("inmobiliaria/add/:ID", "POST","propiedadController","addPropiedad");//anda

$r->addRoute("updateInmo","POST","inmobiliariaController","updateInmobiliaria");//anda

$r->addRoute("propiedad/:ID/update","POST","propiedadController","updatePropiedad");//anda

$r->addRoute("propiedad/Api/","POST","propiedadController","updatePropiedad");//anda

$r->addRoute("propiedad/:ID/addimage","POST","propiedadController","addPropiedadImage");

$r->addRoute("propiedad/:ID/eliminar", "GET", "propiedadController","deletePropiedad");//anda

$r->addRoute("inmobiliaria/eliminar/:ID", "GET", "inmobiliariaController","deleteInmobiliaria");//anda

$r->setDefaultRoute("inmobiliariaController","showInmobiliarias");

$r->route($_GET['action'],$_SERVER['REQUEST_METHOD']);