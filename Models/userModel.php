<?php
class UserModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=inmobiliarias;charset=utf8', 'root', '');
    }
    
    function addUser($name,$mail,$pass,$ciudad){
        $promese=$this->db->prepare("INSERT INTO usuario(nombre,mail,password,ciudad) VALUES(?,?,?,?)");
        $promese->execute(array($name,$mail,$pass,$ciudad));
    }

    public function getByMail($mail) {/* Retorna un obj usuario según el mail pasado*/
        $query = $this->db->prepare('SELECT * FROM usuario WHERE mail = ?');
        $query->execute(array($mail));
        $user=$query->fetch(PDO::FETCH_OBJ);
        return $user;
    }

    public function getPassword($mail){
        $sentencia=$this->db->prepare("SELECT FROM usuario WHERE email=?");
        $sentencia->execute(array($mail));
        var_dump($mail);
        //$password=$sentencia->
    }

}