<?php
require_once "libs/Smarty.class.php";
require_once "helpers/user.helper.php";

class propiedadView{

    private $Smarty;

    public function __construct(){
        $Helper= new userHelper();
        $user= $Helper->getLoggedUser();

        $this->Smarty=new Smarty();
        $this->Smarty->assign('base',BASE_URL);//crear variables en smarty
        $this->Smarty->assign('user', $user);

    }
    
    public function displayPropiedades($propiedades,$id,$title,$inmobiliaria,$user,$imgs){
        $this->Smarty->assign('id',$id);
        $this->Smarty->assign('user',$user);
        if($imgs){
            $cant=count($imgs);
            $this->Smarty->assign('imgs',$imgs);
            $this->Smarty->assign('cant_im',$cant);
        }
        $this->Smarty->assign('inmobiliaria',$inmobiliaria);
        $this->Smarty->assign('Logo','<img src="../img/anabelaltuna.png">');
        $this->Smarty->assign('css','<link rel=stylesheet href="../css/style.css" type="text/css">');
        $this->Smarty->assign('title',$title);
        $this->Smarty->assign('propiedades',$propiedades);
        $this->Smarty->display("Templates/showPropiedades.tpl");
    }

    public function displayPropiedad($propiedad,$inmobiliaria,$user,$imgs){
        $title="Anabel Altuna | Estudio Inmobiliario";
        $this->Smarty->assign('title',$title); 
        if($imgs){
            $cant=count($imgs);
            $this->Smarty->assign('imgs',$imgs);
            $this->Smarty->assign('cant_im',$cant);
            // var_dump($imgs[0]->ruta);die();
        }
        $this->Smarty->assign('inmobiliaria',$inmobiliaria); 
        $this->Smarty->assign('user',$user);
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
