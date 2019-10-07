<?php
require_once "libs/Smarty.class.php";
// require_once "Helpers/helper.php";

class inmobiliariaView{
    
    public function __construct(){
        // $Helper= new helper();
    }
    
    public function displayInmobiliarias($inmobiliarias){
        echo("inmobiliarias");
        var_dump($inmobiliarias);
        $Smarty=new Smarty();
        $Smarty->assign('base',BASE_URL);//crear variables en smarty
        $Smarty->assign('inmobiliarias',$inmobiliarias);
        $Smarty->display("Templates/showInmobiliaria.tpl");
        // $title="FOUND";
        // $Smarty->assign('title',$title);
        // $Smarty->assign('id','ciudad','encargado','direccion');
    }
}