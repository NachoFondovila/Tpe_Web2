<?php
require_once "libs/Smarty.class.php";
require_once "helpers/user.helper.php";

class propiedadView{

    private $Smarty;

    public function __construct(){
        $Helper= new userHelper();
        $userName= $Helper->getLoggedUser();

        $this->Smarty=new Smarty();
        $this->Smarty->assign('base',BASE_URL);//crear variables en smarty
        $this->Smarty->assign('userName', $userName);

    }
    
    public function displayPropiedades($propiedades,$id,$title,$inmobiliaria,$iniciado){
        $this->Smarty->assign('id',$id);
        $this->Smarty->assign('iniciado',$iniciado);
        $this->Smarty->assign('inmobiliaria',$inmobiliaria);
        $this->Smarty->assign('Logo','<img src="../img/anabelaltuna.png">');
        $this->Smarty->assign('css','<link rel=stylesheet href="../css/style.css" type="text/css">');
        $this->Smarty->assign('title',$title);
        $this->Smarty->assign('propiedades',$propiedades);
        $this->Smarty->display("Templates/showPropiedades.tpl");
    }

    public function displayPropiedad($propiedad,$inmobiliaria,$iniciado){
        $title="Anabel Altuna | Estudio Inmobiliario";
        $this->Smarty->assign('title',$title); 
        $this->Smarty->assign('inmobiliaria',$inmobiliaria); 
        $this->Smarty->assign('iniciado',$iniciado);
        $this->Smarty->assign('Logo','<img src="../img/anabelaltuna.png">');
        $this->Smarty->assign('css','<link rel=stylesheet href="../css/style.css" type="text/css">');
        $this->Smarty->assign('propiedad',$propiedad);
        $this->Smarty->display("Templates/showPropiedad.tpl");
    }

    public function displayError($msgError) {
        echo "<h1>ERROR!</h1>";
        echo "<h3>{$msgError}</h3>";
    }
}///probar primero en la api con postman
