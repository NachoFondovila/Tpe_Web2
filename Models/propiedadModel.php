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
        // var_dump($id);die();
        $propiedad= $this->db->prepare("DELETE FROM propiedad WHERE id=?");
        $propiedad->execute(array($id)); 
    }

    public function deleteImage($idProp){
        // var_dump($idProp);die();
        //eliminar imagenes del server
        $imagenes=$this->getImagenes($idProp);
        $cantTotal=count($imagenes['name']);
        var_dump($imagenes['ruta'][$i]);die();
        for ($i=0;$i<$cantTotal;$i++) {
            unlink($imagenes['ruta'][$i]);
        }
        $imagen= $this->db->prepare("DELETE FROM imagenes WHERE id_propiedad_fk=?");
        $imagen->execute(array($idProp));
        // var_dump($imagen->errorInfo());die();    
    }
    public function elimImage($idImg){
        $imagen= $this->db->prepare("DELETE FROM imagenes WHERE id=?");
        $imagen->execute(array($idImg));
        //unlink($imagenes['ruta'][$i]);
    }

    function getAllImgs(){/////////////////////////////////////////////////////////////////////////////////////////
        $imagen = $this->db->prepare("SELECT * FROM imagenes ");
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
        $propiedad = $this->db->prepare('INSERT INTO propiedad(direccion,tipo,estado,id_inmobiliaria_fk) VALUES(?,?,?,?)');
        $propiedad->execute([$direccion,$tipo,$estado,$id_inmobiliaria_fk]);
        if($imagenes){
            $id_prop = $this->db->lastInsertId();
            $this->subirImagenes($imagenes,$id_prop);
        }
    }
    
    
    //funcion que mueve la imagen y retorna la ruta de donde se encuentra
    // private function moveFile($file){
    //     $filepath= "img/propiedades/".uniqid().".".strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    //     move_uploaded_file($file['tmp_name'],$filepath);
    
    //     return $filepath;
    // }
    
   public function subirImagenes($imagenes,$idProp){
       $sent_imagenes = $this->db->prepare('INSERT INTO imagenes (id_propiedad_fk,ruta) VALUES(?,?)');
       $cantTotal=count($imagenes['name']);
       if($cantTotal>1){
           for ($i=0;$i<$cantTotal;$i++) {
               $filepath= "img/propiedades/".uniqid().".".strtolower(pathinfo($imagenes['name'][$i], PATHINFO_EXTENSION));  
               move_uploaded_file($imagenes['tmp_name'][$i], $filepath);
               $sent_imagenes->execute([$idProp,$filepath]);
            }
        }
        else{
            $filepath= "img/propiedades/".uniqid().".".strtolower(pathinfo($imagenes['name'], PATHINFO_EXTENSION));  
            move_uploaded_file($imagenes['tmp_name'], $filepath);
            $sent_imagenes->execute([$idProp,$filepath]);
        }
    }
}


