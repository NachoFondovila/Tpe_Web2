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
            $user=$this->helper->getLoggedUser();
        }
        else{
            $user= $_SESSION;
        }
        $title="Anabel Altuna | Estudio Inmobiliario";
        $idInmobiliaria = $params[':FK'];
        $propiedades=$this->model->getPropiedades($idInmobiliaria);//le pido al model que me traiga de la DB el arreglo de propiedades
        $inmobiliaria= $this->modelInmo->getInmobiliaria($idInmobiliaria);
        $imagenes=$this->model->getAllImgs();
        $this->view->displayPropiedades($propiedades,$idInmobiliaria,$title,$inmobiliaria,$user,$imagenes);//le envio al view el arreglo para que lo muestre 
    }

    function showPropiedad($params=null){
        $user=$this->helper->getLoggedUser();
        $idPropiedad= $params[':ID'];
        $propiedad=$this->model->getPropiedad($idPropiedad);
        $imagenes=$this->model->getImagenes($idPropiedad);
        $inmobiliaria= $this->modelInmo->getInmobiliaria($propiedad->id_inmobiliaria_fk);
        // $imagenes= $this->model->
        if($propiedad && $inmobiliaria){
            // if($imagenes){

            // }
            $this->view->displayPropiedad($propiedad,$inmobiliaria,$user,$imagenes);
        }
    }
    
    function addPropiedadImage($params=null){
        $idPropiedad = $params[':ID'];
        if($this->sonImg($_FILES['imago'])) {
            $this->model->subirImagenes($_FILES['imago'],$idPropiedad);
            header("location: http://localhost/GitHub/Tpe_Web2/propiedad/$idPropiedad");/////////////
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
        $user=$this->helper->getLoggedUser();
    }

    public function updatePropiedad($params = null) {
        $idPropiedad = $params[':ID'];
        $direccion = $_POST['direc'];
        $tipo = $_POST['type'];
        $estado = $_POST['state'];
        $imgs= $_FILES['image'];
        if(!empty($direccion) && !empty($tipo) && !empty($estado)){
            if($imgs['name'] != ""){
                if($this->sonImg($imgs)){
                    $this->model->update($idPropiedad,$direccion,$estado,$imgs,$tipo);
                    header("location:".BASE_URL. "propiedad/$idPropiedad"); 
                }
                else{
                    $this->view->displayError("Formato de archivo no aceptado");
                }
            }
            else{
                // var_dump($imagen);die();
                $imagen=null;
                $this->model->update($idPropiedad,$direccion,$estado,$imagen,$tipo);
                header("location: http://localhost/GitHub/Tpe_Web2/propiedad/$idPropiedad");/////////////////////////////////////////
            }
        }
        else{
            $this->view->displayError("faltan completar los campos obligatorios");
        }
    }

    function addPropiedad($params = []){
        $idInmo=$params[':ID'];
        $direccion = $_POST['direc'];
        $tipo = $_POST['type'];
        $estado = $_POST['state'];
        // $imagen = $_POST['image'];  no se utiliza mas para files
        $imgs=$_FILES['image'];
        // var_dump($_FILES);die();
        if(!empty($direccion) && !empty($tipo) && !empty($estado)){
            if($this->sonImg($imgs)) {
                $this->model->aggPropiedad($direccion,$estado,$tipo,$imgs,$idInmo);
                header("Location: ".BASE_URL."inmobiliaria/{$idInmo}");
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

    function deleteImage($params = []){
        $idPropiedad=$params[':ID'];
        $img=$params[':IMG'];
        $this->model->elimImage($img);
        $propiedad=$this->model->getPropiedad($idPropiedad);
        header("Location: ".BASE_URL."inmobiliaria/{$propiedad->id_inmobiliaria_fk}");
    }
    
     function sonImg($imagenes){
        $cantTotal=count($imagenes['type']);
        $areImg=true;
        if ($cantTotal > 1){
            for($i=0;$i<$cantTotal;$i++) {
                $imagenesTipos=$imagenes['type'][$i];
                if($imagenesTipos == 'image/jpeg' || $imagenesTipos == 'image/jpg' || $imagenesTipos =='image/png') {
                    $areImg=true;
                }else{
                    $areImg=false;
                }
            }
        }
        else{
            $imgType=$imagenes['type'];
            if($imgType == 'image/jpeg' || $imgType == 'image/jpg' || $imgType =='image/png') {
                $areImg=true;
            }else{
                $areImg=false;
            }
        }
        return $areImg;
    }
  
}