<?php

require_once "../helpers/user.helper.php";
require_once "comentsModel.php";
require_once "JSONview.php";



abstract class ApiController {

    protected $model;
    protected $view;
    private $data;
    private $helper;

    public function __construct() {
        $this->model = new comentsModel();
        $this->view= new JSONview();
        $this->helper= new userHelper();
        $this->data= file_get_contents("php://input");//que es esa direccion
    }

    public function getData(){
        return json_decode($this->data);
    }

    public function  getComents($params = null) {
        $idPropiedad=[':ID'];
        $coments = $this->model->getAll($idPropiedad);
        $this->view->response($tareas, 200);
    }

    public function addComent($params = []){
        $idProp=$params[':ID'];
        $puntuacion = $_POST['puntuacion'];
        $fecha = $_POST['fecha'];
        $comentario = $_POST['comentario'];
        $user=$this->helper->getLoggedUser();
        if($user !=null){
            $this->model->addCom($idProp,$puntuacion,$fecha,$comentario,$user);
            header("location: http://localhost/GitHub/Tpe_Web2/propiedad/$idProp"); 
        }else{
            $this->view->displayError("Debe ser usuario registrado para comentar");
        }
    }


}