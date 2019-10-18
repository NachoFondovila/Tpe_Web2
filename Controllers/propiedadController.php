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
        $title="Anabel Altuna | Estudio Inmobiliario";
        $idInmobiliaria = $params[':ID'];
        $propiedades=$this->model->getPropiedades($idInmobiliaria);//le pido al model que me traiga de la DB el arreglo de propiedades
        $this->view->displayPropiedades($propiedades,$idInmobiliaria,$title);//le envio al view el arreglo para que lo muestre 
    }

    function showPropiedad($params=null){
        $idPropiedad= $params[':ID'];
        $propiedad=$this->model->getPropiedad($idPropiedad);
        if($propiedad){
        $this->view->displayPropiedad($propiedad);
        }
    }

    function addPropiedad($params = []){
        $idInmo=$params[':ID'];

        $direccion = $_POST['direc'];
        $tipo = $_POST['type'];
        $estado = $_POST['state'];
        $imagen = $_POST['image'];

        if(!empty($direccion) && !empty($tipo) && !empty($estado)){
            $this->model->aggPropiedad($direccion,$estado,$estado,$imagen,$idInmo);
            header("Location: ". VER . "/". $idInmo);
        }
    }

    function deletePropiedad($params = []){
        $idPropiedad=$params[':ID'];
        $propiedad=$this->model->elimPropiedad($idPropiedad);
        header("Location: ". VER . "/" . $idPropiedad);
    }
  
}