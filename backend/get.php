<?php

include_once("conexao.php");

function read($recurso, $id)
{
    if ($recurso == "comentarios") {
        $sql = $id ? "SELECT * FROM {$recurso} WHERE item_id = :id" : "SELECT * FROM {$recurso}";

        $resultado = conn()->prepare($sql);
        $resultado->bindValue(':id', $id);
        $resultado->execute();

        return $resultado->fetchAll(PDO::FETCH_OBJ);
    } else if (is_numeric($id) || $id == null) {
        $sql = $id ? "SELECT * FROM {$recurso} WHERE id = :id" : "SELECT * FROM {$recurso}";

        $resultado = conn()->prepare($sql);
        $resultado->bindValue(':id', $id);
        $resultado->execute();

        return $resultado->fetchAll(PDO::FETCH_OBJ);
    } else {
        if ($recurso == "produtos") {
            $categoria = $id;
            $sql = $categoria ? "SELECT * FROM {$recurso} WHERE categoria = :categoria" : "SELECT * FROM {$recurso}";

            $resultado = conn()->prepare($sql);
            $resultado->bindValue(':categoria', $categoria);
            $resultado->execute();

            return $resultado->fetchAll(PDO::FETCH_OBJ);
        } else {
            $email = $id;
            $sql = "SELECT id, nome, email, senha FROM {$recurso} WHERE email = :email";

            $resultado = conn()->prepare($sql);
            $resultado->bindValue(':email', $email);
            $resultado->execute();

            return $resultado->fetchAll(PDO::FETCH_OBJ);
        }
    }
}
