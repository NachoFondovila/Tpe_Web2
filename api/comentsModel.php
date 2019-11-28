<?php

class comentsModel{

    private $API;

    function __construct(){
        $this->API=new PDO('mysql:host=localhost;dbname=inmobiliarias;charset=utf8', 'root', '');//como funciona? 
    }


    function getAll($id_prop){
        $sentencia=$this->API->prepare('SELECT*FROM comentario where id_prop_fk = ?');
        $sentencia->execute(array($id_prop));
        $coments=$sentencia->fetchAll(PDO::FETCH_OBJ);//como se trae
        return   $coments;
    }

    function addCom($fecha,$puntuacion,$comentario,$idProp,$user){
        // echo($idProp,$puntuacion,$fecha,$comentario,$user);die();   
        $sentencia=$this->API->prepare('INSERT INTO comentario(id_prop_fk,puntuacion,fecha,comentario,id_user_fk) VALUES (?,?,?,?,?)');
        $sentencia->execute(array($idProp,$puntuacion,$fecha,$comentario,$user));
        return false;
    }
    function delete($idCom){
        $sentencia=$this->API->prepare('DELETE FROM comentario WHERE id=?');
        $sentencia->execute(array($idCom));
    }
    function getPorcent($id_prop){
        $sent=$this->API->prepare("SELECT ROUND (AVG(comentario.puntuacion),2)AS promedio FROM comentario WHERE id_prop_fk=?"); 
        $sent->execute(array($id_prop));
        $porcent= $sent->fetch(PDO::FETCH_OBJ);
        return $porcent;
    }

    function getComent($id){
        $com = $this->API->prepare("SELECT * FROM comentario WHERE id=?");
        $com->execute(array($id));
        return $com->fetch(PDO::FETCH_OBJ);
    }

}