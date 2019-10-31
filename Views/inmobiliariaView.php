<?php
require_once "libs/Smarty.class.php";
require_once "Helpers/user.helper.php";

class inmobiliariaView{
    
    private $Smarty;

    public function __construct(){
        $this->Smarty=new Smarty();
        $Helper= new userHelper();
        $this->Smarty->assign('base',BASE_URL);//crear variables en smarty
    }

    public function displayError($msj){
        echo($msj);
    }
    
    public function displayInmobiliarias($inmobiliarias,$iniciado){
        $title="Anabel Altuna | Estudio Inmobiliario";
        $titulo="title";
        $this->Smarty->assign('css','<link rel=stylesheet href="css/style.css" type="text/css">');
        $this->Smarty->assign('inmobiliarias',$inmobiliarias);
        $this->Smarty->assign('Logo','<img src="img/anabelaltuna.png">');
        $this->Smarty->assign('title',$title);
        $this->Smarty->assign('iniciado',$iniciado);
        $this->Smarty->display("Templates/showInmobiliaria.tpl");
    }
}