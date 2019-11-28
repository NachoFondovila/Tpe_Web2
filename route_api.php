<?php
    require_once('Router.php');
    require_once('api/apiComentsController.php');
    
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

    $router = new Router();
    // rutas
    $router->addRoute("getComments/:ID", "GET", "apiComentsController", "getComents");
    
    $router->addRoute("getComent/:ID", "GET", "apiComentsController", "getComent");
    
    $router->addRoute("elimComent/:ID", "DELETE", "apiComentsController", "deleteCom");
    
    $router->addRoute("addCom","POST","apiComentsController","addComent");
    
    $router->addRoute("porcent/:ID","GET","apiComentsController","getPorcentaje");
   
    //run
    $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 