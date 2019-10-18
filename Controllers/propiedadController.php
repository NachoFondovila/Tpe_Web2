<?php
require_once "./Models/propiedadModel.php";
require_once "./Views/propiedadView.php";


class propiedadController {
    
    private $model;
    private $view;

	function __construct(){
        $this->model = new propiedadModel();
        $this->view = new propiedadView();
    }

    function showPropiedades($params = []){
        $idInmobiliaria =1;// $params[':ID'];
        echo $idInmobiliaria;
        $propiedades=$this->model->getPropiedades($idInmobiliaria);//le pido al model que me traiga de la DB el arreglo de propiedades
        $this->view->displayPropiedades($propiedades);//le envio al view el arreglo para que lo muestre 
    }
    function showPropiedad($params=null){//<------------------------------??????????????
        $idPropiedad= $params[':ID'];
        $propiedad=$this->model->getPropiedad($idPropiedad);
        if($propiedad){
        $this->view->displayPropiedad($propiedad);
        }
    }

  
}