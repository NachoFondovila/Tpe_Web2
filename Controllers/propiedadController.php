<?php
require_once "./Models/propiedadModel.php";
require_once "./Views/propiedadView.php";


class inmobiliariaController {
    
    private $model;
    private $view;

	function __construct(){
        $this->model = new propiedadModel();
        $this->view = new propiedadView();
    }

    function getPropiedades(){
        $propiedades=$this->model->getPropiedades();//le pido al model que me traiga de la DB el arreglo de propiedades
        $this->view->displayPropiedades($propiedades);//le envio al view el arreglo para que lo muestre 
    }
}