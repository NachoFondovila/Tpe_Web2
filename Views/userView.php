<?php
require_once('libs/Smarty.class.php');

class userView{
    
    private $smarty;

    function __construct(){
        $Helper= new userHelper();
        $this->smarty=new Smarty(); 
        $this->smarty->assign('base',BASE_URL);
    }
    
    public function displayUsers($users,$user){
        $title="Anabel Altuna | Estudio Inmobiliario";
        $this->smarty->assign('users', $users);
        $this->smarty->assign('user', $user);
        $this->smarty->assign('Logo','<img src="img/anabelaltuna.png">');
        $this->smarty->assign('css','<link rel=stylesheet href="css/style.css" type="text/css">');
        $this->smarty->assign('title', $title);
        $this->smarty->assign('Linkcss','<link rel=stylesheet href="css/style.css" type="text/css" media=screen>');
        $this->smarty->display('templates/showUsers.tpl');
    }

    public function showLogin($user) {
        $title="Anabel Altuna | Estudio Inmobiliario";
        $this->smarty->assign('user', $user);
        $this->smarty->assign('Logo','<img src="img/anabelaltuna.png">');
        $this->smarty->assign('css','<link rel=stylesheet href="css/style.css" type="text/css">');
        $this->smarty->assign('title', $title);
        $this->smarty->assign('Linkcss','<link rel=stylesheet href="css/style.css" type="text/css" media=screen>');
        $this->smarty->display('templates/login.tpl');
    }

    public function displayError($error){
            echo "<h1>ERROR!</h1>";
            echo "<h3>{$error}</h3>";
    }
}