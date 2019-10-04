<?php
    public fuction getPassword($user){
        $sentencia=$this->db->prepare("SELECT" FROM usuarios WHERE email=?)
        $sentencia->execute(array($user));

        $password=$sentencia->
    }

 





?>