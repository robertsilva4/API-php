<?php

include_once ("conexao.php");

function read($recurso, $id)
{

    $sql = $id ? "SELECT * FROM {$recurso} WHERE id = :id" : "SELECT * FROM {$recurso}";

    $resultado = conn()->prepare($sql);
    $resultado->bindValue(':id', $id);
    $resultado->execute();

    return $resultado->fetchAll(PDO::FETCH_OBJ);
}