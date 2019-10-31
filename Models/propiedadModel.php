<?php

class propiedadModel{

    protected $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=inmobiliarias;charset=utf8', 'root', '');
    }

    public function getPropiedades($idInmobiliaria){
        $sentencia= $this->db->prepare('SELECT * FROM propiedad WHERE id_inmobiliaria_fk = ?');
        $sentencia->execute((array($idInmobiliaria)));
        $propiedades= $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $propiedades;
    }

    public function getPropiedad($id){
        $propiedad = $this->db->prepare("SELECT * FROM propiedad WHERE id=?");
        $propiedad->execute(array($id));
        return $propiedad->fetch(PDO::FETCH_OBJ);
    }
    
    public function elimPropiedad($id){
        $propiedad= $this->db->prepare("DELETE FROM propiedad WHERE id=?");
        $propiedad->execute(array($id)); 
    }

    function getInmobiliaria($id){
        $sentencia= $this->db->prepare('SELECT * FROM inmobiliaria WHERE id=?');
        $sentencia->execute(array($id));
        return $inmobiliaria =$sentencia->fetch(PDO::FETCH_OBJ);
    }

    public function update($id,$direccion,$estado,$imagen=null,$tipo){
        $query = $this->db->prepare('UPDATE propiedad SET direccion=? , estado=? , imagen=? ,tipo =? WHERE id = ?');
        $query->execute(array($direccion,$estado,$imagen,$tipo, $id));
    }
    
    function aggPropiedad($direccion,$tipo,$estado,$imagen,$id_inmobiliaria_fk){
        $propiedad = $this->db->prepare('INSERT INTO propiedad(direccion,tipo,estado,imagen,id_inmobiliaria_fk) VALUES(?,?,?,?,?)');
        $propiedad->execute([$direccion,$tipo,$estado,$imagen,$id_inmobiliaria_fk]); 
        
    }

}


