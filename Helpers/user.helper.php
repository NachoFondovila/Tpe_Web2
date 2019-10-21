<?php
//ayuda al model

class userHelper {
    public function __construct() {}

    public function login($user) {
        session_start();
            $_SESSION['ID'] = $user->id;
            $_SESSION['USERNAME'] = $user->username;
            $_SESSION['MAIL'] = $user->mail;
            $_SESSION['PASSWORD'] = $user->password;
    }

    public function logout() {
        session_start();
        session_destroy();
    }

    public function checkLog($user) {
         var_dump($user . "pppp");
        session_start();
        if (!isset($_SESSION['USERNAME'])) {
            $this->login($user);
        }       
    }

    public function getLoggedUser() {
        session_start();
        if (session_status() != PHP_SESSION_ACTIVE){
            return $_SESSION['USERNAME'];
        }
        else{
            return null;
        }
    }
}