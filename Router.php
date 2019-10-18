<?php

class Route{
    private $url;
    private $verb;
    private $controller;
    private $method;
    private $params;
    
    public function __construct($url,$verb,$controller,$method){
        $this->url = $url;
        $this->verb = $verb;
        $this->controller = $controller;
        $this->method = $method;
        $this->params = [];
    }

    public function match($url,$verb){//<---------------------------------------------¡?¡?¡?¡?¡?¡?¡?¡?
        //compara las urls, a la que me redirigen y las que tengo prearmadas
        if($this->verb != $verb){
            return false;
        }
        $partsURL = explode("/",trim($url,'/'));
        $partsRoute = explode("/",trim($this->url,'/'));
        if(count($partsRoute)!= count($partsURL)){
            return false;
        }
        foreach($partsRoute as $key=> $part){
            if($part[0] != ":"){//que pasa si una url empieza con ":"
                if($part != $partsURL[$key]){
                    return false;
                }
            }
            else
            $this->params[$part] = $partsURL[$key];
        }
        return true;
    }

    public function run(){
        $controller = $this->controller;
        $method = $this->method;
        $params = $this->params;

        (new $controller())->$method($params);
    }
}



class Router{
    private $routeTable = [];//tabla de ruteo vacia
    private $defaultRoute;//ruta por defecto a la que redirige

    public function __construct(){
        $this->defaultRoute = null;
    }

    public function route($url, $verb){
        foreach ($this->routeTable as $route) {//recorro cada ruta[iterador(route)] de mi tabla de ruteo(routeTable)
            if($route->match($url,$verb)){
                $route->run();
                return;
            }
        }
        if($this->defaultRoute !=null){
            echo("defaultpage");
            $this->defaultRoute->run();
        }
    }

    public function addRoute($url,$verb,$controller,$method){
        $this->routeTable[]= new Route($url,$verb,$controller,$method);
    }

    public function setDefaultRoute($controller, $method){
        $this->defaultRoute = new Route("","",$controller,$method);
    }
}