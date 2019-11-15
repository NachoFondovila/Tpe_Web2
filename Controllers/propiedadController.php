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
        $imagenes=$this->model->getAllImgs();
        $this->view->displayPropiedades($propiedades,$idInmobiliaria,$title,$inmobiliaria,$iniciado,$imagenes);//le envio al view el arreglo para que lo muestre 
    }

    function showPropiedad($params=null){
        $iniciado=$this->helper->getLoggedUser();
        $idPropiedad= $params[':ID'];
        $propiedad=$this->model->getPropiedad($idPropiedad);
        $imagenes=$this->model->getImagenes($idPropiedad);
        $inmobiliaria= $this->modelInmo->getInmobiliaria($propiedad->id_inmobiliaria_fk);
        // $imagenes= $this->model->
        if($propiedad && $inmobiliaria){
            // if($imagenes){

            // }
            $this->view->displayPropiedad($propiedad,$inmobiliaria,$iniciado,$imagenes);
        }
    }
    
    function addPropiedadImage($params=null){
        $idPropiedad = $params[':ID'];
        // $image= $_FILES['imagen'];
        // if($_FILES['imagen']!=null){
        var_dump($_FILES['imago']);die();
        if(sonIMG($_FILES['image']['type'])){
            $this->model->addImage($idPropiedad,$_FILES['imagen']);
                header("location: http://localhost/GitHub/Tpe_Web2/propiedad/$idPropiedad");
            }
            else{
                $this->view->displayError("Formato de archivo no aceptado");
            }
        // } 
        // else{
        //     $this->view->displayError("Debe ingresar un archivo");
        // }
    }

    public function showComents($params=null){
        $iniciado=$this->helper->getLoggedUser();
    }

    public function updatePropiedad($params = null) {
        $idPropiedad = $params[':ID'];
        $direccion = $_POST['direc'];
        $tipo = $_POST['type'];
        $estado = $_POST['state'];
        $imagen = $_FILES['image'];
        var_dump($_FILES['image']);die();

        if(sonIMG($_FILES['image']['type'])){
            if(!empty($direccion) && !empty($tipo) && !empty($estado)){
                $this->model->update($idPropiedad,$direccion,$estado,$imagen,$tipo);
                header("location: http://localhost/GitHub/Tpe_Web2/propiedad/$idPropiedad"); 
            }
            else{
                $this->view->displayError("faltan completar los campos obligatorios");
            }
        }
        else{
            $this->view->displayError("Formato de archivo no aceptado");
        }
    }

    function addPropiedad($params = []){
        $idInmo=$params[':ID'];
        $direccion = $_POST['direc'];
        $tipo = $_POST['type'];
        $estado = $_POST['state'];
        // $imagen = $_POST['image'];  no se utiliza mas para files
        $imgs=$_FILES['image'];
        if(!empty($direccion) && !empty($tipo) && !empty($estado)){
            if($this->sonImg($imgs)) {
                $this->model->aggPropiedad($direccion,$estado,$tipo,$imgs,$idInmo);
                header("Location: ".BASE_URL."propiedad/{$idInmo}");
            }
            else{
                $this->view->displayError("Formato de archivo no aceptado");
            }
        }
        else{
            $this->view->displayError("faltan completar los campos obligatorios");
        }
    }

    function deletePropiedad($params = []){
        $idPropiedad=$params[':ID'];
        // $idInmobiliaria=$params[':FK'];
        $this->model->elimPropiedad($idPropiedad);
        header("Location: ".BASE_URL."ver");
    }
    
     function sonImg($imagenes){
        $cantTotal=count($imagenes['type']);
        $areImg=true;
        for($i=0;$i<$cantTotal;$i++) {
            $imagenesTipos=$imagenes['type'][$i];
                if($imagenesTipos == 'image/jpeg' || $imagenesTipos == 'image/jpg' || $imagenesTipos =='image/png') {
                    $areImg=true;
                }else{
                    $areImg=false;
                }
        }
        return $areImg;
    }
  
}