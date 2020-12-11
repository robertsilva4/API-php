<?php

include_once("recursos.php");

function rota($metodo, $recurso)
{
    $metodoPermitido = ['GET', 'POST', 'PUT', 'DELETE'];
    $recursoPermitido = ['clientes', 'usuarios', 'produtos', 'comentarios'];

    if (in_array($metodo, $metodoPermitido)) {
        if (in_array($recurso[0], $recursoPermitido)) {
            call_user_func_array($metodo, $recurso);
        }
        else {
            echo(json_encode(array('status'=>'error', 'data'=> 'recurso não encontrado')));
            header('HTTP/1.1 404 NOT FOUND');
        }
    }else {
        echo(json_encode(array('status'=>'error','data'=>'metodo não perimitido')));
        header('HTTP/1.1 405 METHOD NOT ALLOWED');
        header('Allow: GET, POST, PUT, DELETE');
    }
}