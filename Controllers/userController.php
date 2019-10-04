<?php

class userController
//
    $hash=password_hash("web 2",PASSWORD_DEFAULT);
    hash
//
public function iniciarSesion(){
    $password=$_POST('pass');
    $usuario=$this->model->getHash($_POST['user']);
    
    if(isset($usuario)&& $usuario!=null && password_verify($password,$usuario->password)){//si el usurio exite, y verifico la contraseña con la de la bd
        session_start();
        $_SESSION['user']=$usuario->email;
        $_SESSION['user_id']=$usuario->id;

    }else{
        
        header("location:")
    }
}



?>