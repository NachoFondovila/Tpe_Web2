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

    public function showLogin() {
        $iniciado=$this->helper->getLoggedUser();
        $this->view->showLogin("",$iniciado);
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

            //$this->view->showLogin($error);
        }
    }

    public function registracion(){

        $username = $_POST['username'];
        $password = $_POST['password'];
        $ciudad= $_POST['ciudad'];
        $mail=$_POST['email'];

        $hash = password_hash($password, PASSWORD_DEFAULT);
        
        if(isset($mail) && !($this->model->getByMail($mail)) ){//si el usurio exite, y si no esta ese mail en la db
            $this->model->addUser($username,$mail,$hash,$ciudad);
            $user=$this->model->getByMail($mail);
            $this->helper->login($user);
            $name=$user->nombre;
            var_dump($name);

            header("Location: ". VER );
        }
        else{
            $error="El mail con el que se intenta registrar ya fue utilizado";
            echo($error);
            header("Location:" . VER/$error); 
        }
    }

    public function logout() {
        $salir;
    }
}
