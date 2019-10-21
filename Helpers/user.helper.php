<?php
//ayuda al model

class userHelper {
    public function __construct() {}

    public function login($user) {
        // var_dump($user);
        // die();
        session_start();
        if(isset($_SESSION["nombre"])){

        $_SESSION['ID_USER'] = $user->id;
        $_SESSION['USERNAME'] = $user->username;
        }
    }

    public function logout() {
        session_start();
        session_destroy();
    }

    public function checkLog($user) {
         var_dump($user);
        session_start();
        if (!isset($_SESSION['id'])) {
            // header('Location: ' . LOGIN);
        
        }       
    }

    public function getLoggedUserName() {
    if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
        return $_SESSION['USERNAME'];
    }
}