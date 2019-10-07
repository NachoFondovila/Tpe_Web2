<?php
require_once "Controllers/inmobiliariaController.php";
require_once "Controllers/propiedadController.php";
require_once "Controllers/userController.php";


$action=$_GET["action"];
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("INMOBILIARIAS_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("LOGGIN_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/loggin');

$controller= new inmobiliariaController();


  




?>