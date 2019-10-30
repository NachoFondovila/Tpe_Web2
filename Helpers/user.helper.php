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
    }

    public function logout() {
        session_destroy();
        $user=false;
        var_dump($_SESSION['USERNAME']);
        header("Location: ver");  
    }

    public function checkLog($user) {
        if (!isset($_SESSION['USERNAME'])) {
            //session_start();
            $this->login($user);
        }       
    }
    
    public function getLoggedUser() {
        if (!isset($_SESSION['USERNAME'])) {
           return null;
        }
        else{
            return $_SESSION['USERNAME'];
        }
    }
}