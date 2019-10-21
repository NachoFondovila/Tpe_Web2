<?php
class UserModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=inmobiliarias;charset=utf8', 'root', '');
    }

    /**
     * Retorna un usuario según el username pasado.
     */
    public function getByUsername($username) {

        $query = $this->db->prepare('SELECT * FROM usuario WHERE mail = ?');
        $query->execute(array($username));
        return $user;
        $user=$query->fetchAll(PDO::FETCH_OBJ);
    }
    
    public function getPassword($user){
        $sentencia=$this->db->prepare("SELECT FROM usuarios WHERE email=?");
        $sentencia->execute(array($user));
        var_dump($user);
        //$password=$sentencia->
    }
}