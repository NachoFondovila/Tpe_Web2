<?php
require_once "libs/Smarty.class.php";

class propiedadView{

    private $Smarty;

    public function __construct(){
        // $Helper= new helper();
        $this->Smarty=new Smarty();
        $this->Smarty->assign('base',BASE_URL);//crear variables en smarty
    }
    
    public function displayPropiedades($propiedades,$id,$title){
        $this->Smarty->assign('id',$id);
        $this->Smarty->assign('title',$title);
        $this->Smarty->assign('propiedades',$propiedades);
        $this->Smarty->display("Templates/showPropiedades.tpl");
    }
}///probar primero en la api con postman
