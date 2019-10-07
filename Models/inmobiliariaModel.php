<?php

class inmobiliariaModel{

    protected $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=inmobiliarias;charset=utf8', 'root', '');
    }

    public function getInmobiliarias(){
        $sentencia= $this->db->prepare('SELECT * FROM inmobiliaria');
        $sentencia->execute();
        $inmobiliarias =$sentencia->fetchAll(PDO::FETCH_OBJ);
        return $inmobiliarias;
    }




}


