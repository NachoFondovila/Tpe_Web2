<?php

require_once('./Helpers/user.helper.php');
require_once "comentsModel.php";
require_once "apiController.php";
require_once "JSONview.php";

class apiComentsController extends apiController {


    public function  getComents($params = null) {
        $idPropiedad = $params[':ID']; 
        $coments = $this->model->getAll($idPropiedad);
        $this->view->response($coments, 200);
    }

    public function  getComent($params = null) {
        $idCom = $params[':ID']; 
        $coment = $this->model->getComent($idCom);
        var_dump($coment);die();                                    
        $this->view->response($coment, 200);
    }
    
    public function getPorcentaje($params=null){
        $idProp = $params[':ID'];
        $porcent=$this->model->getPorcent($idProp);
        $this->view->response($porcent, 200);
    }
    
    public function deleteCom($params = null){
        $idComent = $params[':ID']; 
        $user=$this->helper->getLoggedUser();
        if($user['USER_TYPE']){
            $this->model->delete($idComent);
            //    $this->view->response();
        }else{
            var_dump($idComent);
            $this->view->displayError("Debe ser usuario administrador para eliminar");
        }
    }

    public function addComent($params = []){
        $comentario= $this->getData();
        $fecha= date("Y/m/d");
        $user=$this->helper->getLoggedUser();
        if($user['USERTYPE']==0){
            $this->model->addCom($fecha,$comentario->puntuacion,$comentario->comentario,$comentario->id_prop,$comentario->id_user);
        }else{
            $this->view->displayError("Debe ser usuario registrado para comentar");
        }
    }
}