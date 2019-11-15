<?php
require_once "./Models/propiedadModel.php";
require_once "./Models/inmobiliariaModel.php";
require_once "./Views/inmobiliariaView.php";
require_once "Helpers/user.helper.php";


class inmobiliariaController {
    
    private $modelProp;
    private $model;
    private $view;
    private $helper;

	function __construct(){
        $this->modelProp= new   propiedadModel();
        $this->model = new inmobiliariaModel(); 
        $this->view = new inmobiliariaView();
        $this->helper = new userHelper();
    }

    function logout(){
        $this->helper->logout();
    }

    function showInmobiliarias($params = []){
        $iniciado=$this->helper->getLoggedUser();
        $inmobiliarias=$this->model->getInmobiliarias();//le pido al model que me traiga de la DB el arreglo de inmobiliarias
        
        if (isset($_GET['error']) && $_GET['error'] == "auth" ) {
            $error = "Usuario o contraseña incorrecta";
            var_dump($error);
        } 
        $this->view->displayInmobiliarias($inmobiliarias,$iniciado);//le envio al view el arreglo para que lo muestre y mi usuario iniciado
    }
    
    function addInmobiliaria(){
        $ciudad = $_POST['ciudad'];
        $encargado = $_POST['encargado'];
        $direccion = $_POST['direc'];
        $contacto = $_POST['contact'];
        if(!empty($ciudad) && !empty($encargado) && !empty($direccion)){
            $this->model->aggInmobiliaria($ciudad, $encargado, $direccion, $contacto);
            header("Location: ver");
        }
        else{
            $this->view->displayError("faltan completar los campos obligatorios.");
        }
    }
    
    public function showComents(){
        
        $this->view->showComents();
    }

    public function deleteInmobiliaria($params = null){
        $idInmobiliaria=$params[':ID'];
        $propiedades=$this->modelProp->getPropiedades($idInmobiliaria);
        if($propiedades==null){
            $this->model->elimInmobiliaria($idInmobiliaria);
            header("Location: ver");
        }else{
            echo("<p class='error'>Primero debe eliminar las propiedades de esta  inmobiliaria</p>");
        }
    }
    
    public function updateInmobiliaria($params = null) {
        $iniciado=$this->helper->getLoggedUser();
        if(isset($iniciado)){
            $idInmobiliaria = $_POST['IDI']; 
            $direccion = $_POST['direc'];
            $ciudad = $_POST['city'];
            $encargado = $_POST['encargado'];
            $contacto = $_POST['contact'];
            $this->model->update($idInmobiliaria,$ciudad,$encargado,$contacto,$direccion);
            header("Location: ver");
        }
    }
}