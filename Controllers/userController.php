<?php
require_once "Models/userModel.php" ;
require_once  "Views/userView.php" ;
require_once "Helpers/user.helper.php";

class userController{

    private $view;
    private $model;
    private $helper;

    public function __construct() {
        $this->view = new userView();
        $this->model = new userModel();
        $this->helper = new userHelper();
    }

    public function showUsers(){
        $user=$this->helper->getLoggedUser();
        if($user['USER_TYPE']){
            $users=$this->model->getUsers();
            $this->view->displayUsers($users,$user);
        }
    }

    public function showLogin() {
        $user=$this->helper->getLoggedUser();
        $this->view->showLogin($user);
    
    }

    public function deleteUser($params = null) {
        $id=$params[':ID'];
        $user=$this->helper->getLoggedUser();
        if($user['USER_TYPE']){
            $this->model->delete($id);
            header("Location: ".BASE_URL."users");
        }
    }
   
    public function updateUser($params = null) { // tengo que consultar si soy administrador ??
        $id=$params[':ID'];
        $bool=$params[':BOOL'];
        $user=$this->helper->getLoggedUser();
        if($user['USER_TYPE']){
            $this->model->updatePermiso($id,$bool);
            header("Location: ".BASE_URL."users");
        }
    }

    public function verifyUser() {
        $contraseña = $_POST['password'];
        $user = $this->model->getByMail($_POST['username']);
        if (password_verify($contraseña, $user->password)) {// encontró un user con el username que mandó, y tiene la misma contraseña
            $this->helper->checkLog($user);
            header("Location: ver");  
        }        
        else {
            $error="Login incorrecto";
            header("Location: ver?error=auth");  
        }
    }

    public function registracion(){
        $user=$this->helper->getLoggedUser();
        if( $user == null){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $ciudad= $_POST['ciudad'];
            $mail=$_POST['email'];
            $habilitado=false;
            $hash = password_hash($password, PASSWORD_DEFAULT);
            
            if(isset($mail) && !($this->model->getByMail($mail)) ){//si el usurio exite, y si no esta ese mail en la db
                $this->model->addUser($username,$mail,$hash,$ciudad,$habilitado);
                $user=$this->model->getByMail($mail);
                $this->helper->login($user);
                $name=$user->nombre;
                header("Location: ". VER );
            }
            else{
                $error="El mail con el que se intenta registrar ya fue utilizado";
                $this->view->displayError($error);
            }
        }
        else{
            $error="Ya hay un usuario iniciado, cierre primero la sesión y luego vuelva a intentarlo";
            $this->view->displayError($error);
        }
    }

    public function logout() {
        $salir;
    }
}