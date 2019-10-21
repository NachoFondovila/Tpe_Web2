<?php

class inmobiliariaModel{

    protected $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=inmobiliarias;charset=utf8', 'root', '');
    }

    function getInmobiliarias(){
        $sentencia= $this->db->prepare('SELECT * FROM inmobiliaria');
        $sentencia->execute();
        return $inmobiliarias =$sentencia->fetchAll(PDO::FETCH_OBJ);
    }


}


