<?php

require_once "./Models/inmobiliariaModel.php";
require_once "./Views/inmobiliariaView.php";


class inmobiliariaController {
    
    private $model;
    private $view;

	function __construct(){
        $this->model = new inmobiliariaModel();
        $this->view = new inmobiliariaView();
    }

    function showInmobiliarias($params = null){
        $inmobiliarias=$this->model->getInmobiliarias();//le pido al model que me traiga de la DB el arreglo de inmobiliarias
        $this->view->displayInmobiliarias($inmobiliarias);//le envio al view el arreglo para que lo muestre 
    }
}