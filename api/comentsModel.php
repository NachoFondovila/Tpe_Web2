<?php

class comentsModel{

    private $API;

    function __construct(){
        $this->API=new PDO("http://anabel-altuna-coment.com/api/coments");//como funciona?
    }


    function getAll($id_prop){
        $sentencia=$this->API->prepare('SELECT*FROM comentarios where propiedad = ?');
        $sentencia->execute(array($id_prop));
        return $coments=$sentencia->fetchAll(PDO::FETCH_JSON);//como se trae
    }

    function addCom($idProp,$puntuacion,$fecha,$comentario,$user){
        var_dump($idProp,$puntuacion,$fecha,$comentario,$user);die();   
        $sentencia=$this->API->prepare('INSERT INTO comentarios(idProp,puntuacion,fecha,comentario,user) VALUES (?,?,?,?,?)');
        $sentencia->execute(array($idProp,$puntuacion,$fecha,$comentario,$user));
    }

    function
}