<?php
require_once "libs/Smarty.class.php";
// require_once "Helpers/helper.php";

class inmobiliariaView{
    
    private $Smarty;

    public function __construct(){
        // $Helper= new helper();
        $this->Smarty=new Smarty();
        $this->Smarty->assign('base',BASE_URL);//crear variables en smarty
    }
    
    public function displayInmobiliarias($inmobiliarias){
        $this->Smarty->assign('inmobiliarias',$inmobiliarias);
        $this->Smarty->display("Templates/showInmobiliaria.tpl");
        // $title="FOUND";
        // $Smarty->assign('title',$title);
        // $Smarty->assign('id','ciudad','encargado','direccion');
    }
}