<?php
require_once('libs/Smarty.class.php');

class userView{
    
    private $smarty;

    function __construct(){
    
        $Helper= new userHelper();
        $this->smarty=new Smarty();    

    }
    
    public function showLogin($error = null ) {
        $title="Anabel Altuna | Estudio Inmobiliario";
        $this->smarty->assign('error', $error);
        $this->smarty->assign('title', $title);
        $this->smarty->display('templates/login.tpl');
    }

    
    }