<?php

class propiedadModel{

    protected $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=inmobiliarias;charset=utf8', 'root', '');
    }

    public function getPropiedades($idInmobiliaria){
        $sentencia= $this->db->prepare('SELECT * FROM propiedad WHERE id_inmobiliaria_fk = ?');
        echo 
        $sentencia->execute((array($idInmobiliaria)));
        $propiedades= $sentencia->fetch(PDO::FETCH_OBJ);
        return $propiedades;
    }

    public function getPropiedad($id){
        $propiedad = $this->db->prepare("SELECT * FROM propiedad WHERE id=?");
        $propiedad->execute(array($id));
        return $propiedad->fetch(PDO::FETCH_OBJ);
    }


}


