<?php
require_once "libs/Smarty.class.php";

class propiedadView{

    private $Smarty;

    public function __construct(){
        // $Helper= new helper();
        $this->Smarty=new Smarty();
        $this->Smarty->assign('base',BASE_URL);//crear variables en smarty
    }
    
    public function displayPropiedades($propiedades){
        $this->Smarty->assign('propiedad',$propiedades->tipo );
        $this->Smarty->assign('propiedades',$propiedades->estado );
    }
}///prueben ek probar la api en postman
