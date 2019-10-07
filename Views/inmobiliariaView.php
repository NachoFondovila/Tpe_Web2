<?php
require_once("libs/Smarty.class.php");

class inmobiliariaView{
    
    public __construct(){
    }
    
    public function displayInmobiliarias($inmobiliarias){
        $Smarty=new Smarty();
        $Smarty->assign('base',BASE_URL);//crear variables en smarty
        $Smarty->assign('inmobiliarias',$inmobiliarias);
        $Smarty->display("Templates/showInmobiliaria.tpl");
        $title="FOUND";
        $Smarty->assign('title',$title);
        // $Smarty->assign('id','ciudad','encargado','direccion');
}
?>