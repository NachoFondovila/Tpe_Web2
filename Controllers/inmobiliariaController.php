<?php

require_once "./Models/inmobiliariaModel.php";
require_once "./Views/inmobiliariaView.php";
require_once "Helpers/user.helper.php";


class inmobiliariaController {
    
    private $model;
    private $view;
    private $helper;

	function __construct(){
        $this->model = new inmobiliariaModel();
        $this->view = new inmobiliariaView();
        $this->helper = new userHelper();
    }

    function showInmobiliarias($params = null){
        $iniciado=$this->helper->getLoggedUser();
        $inmobiliarias=$this->model->getInmobiliarias();//le pido al model que me traiga de la DB el arreglo de inmobiliarias
        $this->view->displayInmobiliarias($inmobiliarias,$iniciado);//le envio al view el arreglo para que lo muestre y mi usuario iniciado
    }
    
}