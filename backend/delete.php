<?php

function del($recurso, $id)
{
    $sql = "DELETE FROM {$recurso} WHERE id = :id";
    $resultado = conn()->prepare($sql);
    $resultado->bindValue(':id', $id);
    $resultado->execute();

    return "deletado";
}