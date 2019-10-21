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
        $user = $this->model->getByUsername($username);

        
        
        
        if (!empty($user) /*&& password_verify($contraseña, $user->password)*/) {// encontró un user con el username que mandó, y tiene la misma contraseña
            $this->helper->checkLog($user);
            $user = $this->model->getByUsername($username);
        }
        else {
            $error="Login incorrecto";
            $this->view->showLogin($error);
        }

        var_dump($user);
    }

    //$hash=password_hash("web 2",PASSWORD_DEFAULT);
    //hash
    public function iniciarSesion(){
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $password=$_POST('pass');
        $usuario=$this->model->getHash($_POST['user']);
        die();
        if(isset($usuario)&& $usuario!=null && password_verify($password,$usuario->password)){//si el usurio exite, y verifico la contraseña con la de la bd
            session_start();
            $_SESSION['user']=$usuario->email;
            $_SESSION['user_id']=$usuario->id;

        }else{
            
            header("location:");
        }
    }
}
