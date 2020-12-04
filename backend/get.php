<?php

include_once ("conexao.php");

function read($recurso, $id)
{
    if (is_numeric($id) || $id == null) {
        $sql = $id ? "SELECT * FROM {$recurso} WHERE id = :id" : "SELECT * FROM {$recurso}";

        $resultado = conn()->prepare($sql);
        $resultado->bindValue(':id', $id);
        $resultado->execute();
    
        return $resultado->fetchAll(PDO::FETCH_OBJ);
    } 
    else{
        $email = $id;
        $sql = "SELECT id, email, senha FROM {$recurso} WHERE email = :email";

        $resultado = conn()->prepare($sql);
        $resultado->bindValue(':email', $email);
        $resultado->execute();
    
        return $resultado->fetchAll(PDO::FETCH_OBJ);
    }

}