<?php
require_once "libs/Smarty.class.php";
require_once "Helpers/user.helper.php";

class inmobiliariaView{
    
    private $smarty;

    public function __construct(){
        $this->smarty=new Smarty();
        $Helper= new userHelper();
        $this->smarty->assign('base',BASE_URL);//crear variables en smarty
    }
    
    public function displayInmobiliarias($inmobiliarias){
        $title="Anabel Altuna | Estudio Inmobiliario";
        $titulo="title";
        $this->smarty->assign('inmobiliarias',$inmobiliarias);
        $this->smarty->assign('title',$title);
        // $this->$smarty->assign('titulo',$titulo);
        $this->smarty->display("Templates/showInmobiliaria.tpl");
        // $Smarty->assign('id','ciudad','encargado','direccion');
    }
}