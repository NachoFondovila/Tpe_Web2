<?php
    require_once('Router.php');
    require_once('./api/apiController.php');
    
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

    $router = new Router();
    // rutas
    $router->addRoute("comments/:ID", "GET", "apiController", "getComents");

    $router->addRoute("comments/:ID", "POST", "apiController", "addComent");
    
    $router->addRoute("comments/:ID", "DELETE", "apiController", "deleteTask");
    

    //run
    $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 