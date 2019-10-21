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
        $this->view->showLogin();
    }

    public function verifyUser() {
        $username = $_POST['username'];
        $contraseña = $_POST['password'];

        $user = $this->model->getByMail($username);
        $hash = password_hash($contraseña, PASSWORD_DEFAULT);
        var_dump($user->password);
        var_dump($hash);
        die();
        if (!empty($user) && password_verify($hash, $user->password)) {// encontró un user con el username que mandó, y tiene la misma contraseña
            $this->helper->checkLog($user);
        }        
        else {
            $error="Login incorrecto";
            $this->view->showLogin($error);
        }

        var_dump($user);
    }

    //$hash=password_hash("web 2",PASSWORD_DEFAULT);
    //hash
    public function registracion(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $ciudad= $_POST['ciudad'];
        $mail=$_POST['email'];

        $hash = password_hash($password, PASSWORD_DEFAULT);
        
        
        if(isset($mail) && !($this->model->getByMail($mail)) ){//si el usurio exite, y si no esta ese mail en la db
            $this->model->addUser($username,$mail,$hash,$ciudad);
            $user=$this->model->getByMail();
            $this->helper->login($user);
            header("location:". VER);
            
        }
        else{
            $error="El mail con el que se intenta registrar ya fue utilizado";
            var_dump($error);
            header("location: ver"); 
        }










        /*

            session_start();
            $_SESSION['user']=$usuario->mail;
            $_SESSION['user_id']=$usuario->id;

        }else{
            
            header("location:");
        }*/
    }
}
