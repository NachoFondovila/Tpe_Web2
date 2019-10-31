<?php
require_once "./Models/propiedadModel.php";
require_once "./Views/propiedadView.php";
require_once "helpers/user.helper.php";
require_once "./Models/inmobiliariaModel.php";


class propiedadController {
    
    private $model;
    private $modelInmo;
    private $view;
    private $helper;

    function __construct(){
        $this->helper=new userHelper();
        $this->model = new propiedadModel();
        $this->modelInmo = new inmobiliariaModel();
        $this->view = new propiedadView();
    }

    function showPropiedades($params = []){
        if (!isset($_SESSION['USERNAME'])) {
            $iniciado=$this->helper->getLoggedUser();
        }
        else{
            $iniciado= $_SESSION['USERNAME'];
        }
        $title="Anabel Altuna | Estudio Inmobiliario";
        $idInmobiliaria = $params[':FK'];
        $propiedades=$this->model->getPropiedades($idInmobiliaria);//le pido al model que me traiga de la DB el arreglo de propiedades
        $inmobiliaria= $this->modelInmo->getInmobiliaria($idInmobiliaria);
        $this->view->displayPropiedades($propiedades,$idInmobiliaria,$title,$inmobiliaria,$iniciado);//le envio al view el arreglo para que lo muestre 
    }

    function showPropiedad($params=null){
        $iniciado=$this->helper->getLoggedUser();
        $idPropiedad= $params[':ID'];
        $propiedad=$this->model->getPropiedad($idPropiedad);
        $inmobiliaria= $this->modelInmo->getInmobiliaria($propiedad->id_inmobiliaria_fk);
        if($propiedad && $inmobiliaria){
            $this->view->displayPropiedad($propiedad,$inmobiliaria,$iniciado);
        }
    }

    public function updatePropiedad($params = null) {
        $idPropiedad = $params[':ID'];
        $direccion = $_POST['direc'];
        $tipo = $_POST['type'];
        $estado = $_POST['state'];
        $imagen = $_POST['image'];
        $this->model->update($idPropiedad,$direccion,$estado,$imagen,$tipo);
        header("location: http://localhost/GitHub/Tpe_Web2/propiedad/$idPropiedad"); 
    }

    function addPropiedad($params = []){
        $idInmo=$params[':ID'];
        $direccion = $_POST['direc'];
        $tipo = $_POST['type'];
        $estado = $_POST['state'];
        $imagen = $_POST['image'];

        if(!empty($direccion) && !empty($tipo) && !empty($estado)){
            $this->model->aggPropiedad($direccion,$estado,$tipo,$imagen,$idInmo);
            header("Location: http://localhost/GitHub/Tpe_Web2/inmobiliaria/$idInmo");
        }
        else{
            $this->view->displayError("faltan completar los campos obligatorios");
        }
    }

    function deletePropiedad($params = []){
        $idPropiedad=$params[':ID'];
        // $idInmobiliaria=$params[':FK'];
        $this->model->elimPropiedad($idPropiedad);
        header("Location: http://localhost/GitHub/Tpe_Web2/ver" );
    }
    
  
}