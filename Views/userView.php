<?php
require_once('libs/Smarty.class.php');

class userView{
    
    private $smarty;

    function __construct(){
        $Helper= new userHelper();
        $this->smarty=new Smarty();    
    }
    
    public function showLogin($error = null, $iniciado) {
        $title="Anabel Altuna | Estudio Inmobiliario";
        $this->smarty->assign('error', $error);
        $this->smarty->assign('iniciado', $iniciado);
        $this->smarty->assign('Logo','<img src="img/anabelaltuna.png">');
        $this->smarty->assign('css','<link rel=stylesheet href="css/style.css" type="text/css">');
        $this->smarty->assign('title', $title);
        $this->smarty->assign('Linkcss','<link rel=stylesheet href="css/style.css" type="text/css" media=screen>');
        $this->smarty->display('templates/login.tpl');
    }
}