<?php

class userHelper {
    public function __construct() {
        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
    }

    public function login($user) {
            $_SESSION['ID'] = $user->id;
            $_SESSION['USERNAME'] = $user->nombre;
            $_SESSION['MAIL'] = $user->mail;
            $_SESSION['PASSWORD'] = $user->password;
            $_SESSION['USER_TYPE'] = $user->habilitado;
    }

    public function logout() {
        session_destroy();
        $user=false;
        var_dump($_SESSION['USERNAME']);
        header("Location: ver");  
    }

    public function checkLog($user) {
        if (!isset($_SESSION['USERNAME'])) {
            $this->login($user);
        }       
    }
    
    public function getLoggedUser() {
        if (! isset($_SESSION['USERNAME'])) {
           return null;
        }
        // var_dump($_SESSION);die();
        else{
            return $_SESSION;
        }
    }
}