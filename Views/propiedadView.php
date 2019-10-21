<?php
require_once "libs/Smarty.class.php";
require_once "helpers/user.helper.php";

class propiedadView{

    private $Smarty;

    public function __construct(){
        $Helper= new userHelper();
        $userName= $Helper->getLoggedUserName();

        $this->Smarty=new Smarty();
        $this->Smarty->assign('base',BASE_URL);//crear variables en smarty
        $this->Smarty->assign('userName', $userName);

    }
    
    public function displayPropiedades($propiedades,$id,$title,$inmobiliaria){
        $this->Smarty->assign('id',$id);
        $this->Smarty->assign('inmobiliaria',$inmobiliaria);
        $this->Smarty->assign('title',$title);
        $this->Smarty->assign('propiedades',$propiedades);
        $this->Smarty->display("Templates/showPropiedades.tpl");
    }

    public function displayError($msgError) {
        echo "<h1>ERROR!</h1>";
        echo "<h3>{$msgError}</h3>";
    }
}///probar primero en la api con postman
