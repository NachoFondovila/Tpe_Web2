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
        $this->modelProp= new propiedadModel();
        $this->model = new inmobiliariaModel(); 
        $this->view = new inmobiliariaView();
        $this->helper = new userHelper();
    }

    function logout(){
        $this->helper->logout();
    }

    function showInmobiliarias($params = []){
        $user=$this->helper->getLoggedUser();
        $inmobiliarias=$this->model->getInmobiliarias();
        if (isset($_GET['error']) && $_GET['error'] == "auth" ) {
            $error = "Usuario o contraseña incorrecta";
        }
        $this->view->displayInmobiliarias($inmobiliarias,$user);
    }
    
    function addInmobiliaria(){
        $ciudad = $_POST['ciudad'];
        $encargado = $_POST['encargado'];
        $direccion = $_POST['direc'];
        $contacto = $_POST['contact'];
        
        $user=$this->helper->getLoggedUser();
        if($user['USER_TYPE']){
            if(!empty($ciudad) && !empty($encargado) && !empty($direccion)){
                $this->model->aggInmobiliaria($ciudad, $encargado, $direccion, $contacto);
                header("Location:" . BASE_URL . "ver");
            }
            else{
                $this->view->displayError("faltan completar los campos obligatorios.");
            }
        }
    }

    public function deleteInmobiliaria($params = null){
        $idInmobiliaria=$params[':ID'];
        $propiedades=$this->modelProp->getPropiedades($idInmobiliaria);
        $user=$this->helper->getLoggedUser();
        if($user['USER_TYPE']){    
            if($propiedades==null){
                $this->model->elimInmobiliaria($idInmobiliaria);
                header("Location:" . BASE_URL . "ver");
            }else{
                $this->view->displayError("Primero debe eliminar las propiedades de esta  inmobiliaria");
            }
        }
    }
    
    public function updateInmobiliaria($params = null) {
        $user=$this->helper->getLoggedUser();
        if($user['USER_TYPE']){
            $idInmobiliaria = $_POST['IDI']; 
            $direccion = $_POST['direc'];
            $ciudad = $_POST['city'];
            $encargado = $_POST['encargado'];
            $contacto = $_POST['contact'];
            $this->model->update($idInmobiliaria,$ciudad,$encargado,$contacto,$direccion);
            header("Location:" . BASE_URL . "ver");
        }
    }
}