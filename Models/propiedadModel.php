<?php

class propiedadModel{

    protected $db;
    protected $api;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=inmobiliarias;charset=utf8', 'root', '');
        $this->api="http://anabel-altuna-coment.com/api/coments";
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
        $this->deleteImages($id);
        $propiedad= $this->db->prepare("DELETE FROM propiedad WHERE id=?");
        $propiedad->execute(array($id)); 
    }

    public function deleteImages($idProp){
        $imagenes=$this->getImagenes($idProp);
        $cantTotal=count($imagenes['name']);
        for ($i=0;$i<$cantTotal;$i++) {
            unlink($imagenes['ruta'][$i]);
        }
        $imagen= $this->db->prepare("DELETE FROM imagenes WHERE id_propiedad_fk=?");
        $imagen->execute(array($idProp));   
    }

    public function elimImage($idImg){
        $imagen= $this->db->prepare("DELETE FROM imagenes WHERE id=?");
        $imagen->execute(array($idImg));
    }

    function getAllImgs(){
        $imagen = $this->db->prepare("SELECT * FROM imagenes");
        $imagen->execute();
        $imagenes=$imagen->fetchAll(PDO::FETCH_OBJ);
        return $imagenes;
    }

    function getImagenes($idProp){
        $imagen = $this->db->prepare("SELECT * FROM imagenes WHERE id_propiedad_fk=?");
        $imagen->execute((array($idProp)));
        $imagenes=$imagen->fetchAll(PDO::FETCH_OBJ);
        return $imagenes;
    }

    function getInmobiliaria($id){
        $sentencia= $this->db->prepare('SELECT * FROM inmobiliaria WHERE id=?');
        $sentencia->execute(array($id));
        return $inmobiliaria =$sentencia->fetch(PDO::FETCH_OBJ);
    }

    public function update($id,$direccion,$estado,$imagen,$tipo){
        $query = $this->db->prepare('UPDATE propiedad SET direccion=? , tipo=? , estado =? WHERE id = ?');
        $query->execute(array($direccion,$estado,$tipo, $id));
        if($imagen !=null){
           $this->subirImagenes($imagen,$id);
        }
    }
    
    function aggPropiedad($direccion,$estado,$tipo,$imagenes=null,$id_inmobiliaria_fk){
        $propiedad = $this->db->prepare('INSERT INTO propiedad (direccion,tipo,estado,id_inmobiliaria_fk) VALUES(?,?,?,?)');
        $propiedad->execute([$direccion,$tipo,$estado,$id_inmobiliaria_fk]);
        if($imagenes){
            $id_prop = $this->db->lastInsertId();
            $this->subirImagenes($imagenes,$id_prop);
        }
    }
    
   public function subirImagenes($imagenes,$idProp){
       $sent_imagenes = $this->db->prepare('INSERT INTO imagenes (id_propiedad_fk,ruta) VALUES(?,?)');
       $cantTotal=0;
       if(is_array($imagenes)){
           $cantTotal= count($imagenes['type']);
       }
       if($cantTotal>1){
           for ($i=0;$i<$cantTotal;$i++) {
               $filepath= "img/propiedades/".uniqid().".".strtolower(pathinfo($imagenes['name'][$i], PATHINFO_EXTENSION));  
               move_uploaded_file($imagenes['tmp_name'][$i], $filepath);
               $sent_imagenes->execute([$idProp,$filepath]);
            }
        }
        else{
            $filepath= "img/propiedades/".uniqid().".".strtolower(pathinfo($imagenes['name'][0], PATHINFO_EXTENSION));  
            move_uploaded_file($imagenes['tmp_name'][0], $filepath);
            $sent_imagenes->execute([$idProp,$filepath]);
        }
    }
}