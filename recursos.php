<?php

include_once ("./get.php");

function get($recurso,  $id = null)
{
    $resultado = read($recurso, $id);
    if ($resultado) {
        echo (json_encode(array('status' => 'success', 'data' => $resultado)));
    } else {
        echo (json_encode(array('status' => 'error', 'data' => 'nenhum registro encontrado')));
        header('HTTP/1.1 404 NOT FOUND');
    }
}