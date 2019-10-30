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

    function aggInmobiliaria($ciudad, $encargado, $direccion, $imagen) {
        $inmobiliaria= $this->db->prepare("INSERT INTO inmobiliaria(ciudad,encargado,direccion,imagen) VALUES(?,?,?,?)");
        $inmobiliaria->execute(array($ciudad, $encargado, $direccion, $imagen));
    }

    public function update($id,$ciudad,$encargado,$imagen,$direccion){
        $query = $this->db->prepare('UPDATE inmobiliaria SET ciudad=? , encargado=? ,direccion =?, imagen=?  WHERE id = ?');
        $query->execute(array($ciudad,$encargado,$direccion,$imagen,$id));
    }

    public function elimInmobiliaria($idInmobiliaria){
        
    }

    public function getInmobiliaria($id){
        $inmobiliaria = $this->db->prepare("SELECT * FROM inmobiliaria WHERE id=?");
        $inmobiliaria->execute(array($id));
        return $inmobiliaria->fetch(PDO::FETCH_OBJ);
    }
}


