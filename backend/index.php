<?php

require_once ('./rota.php');

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

// $url = $_GET['url'];
if ($_GET) {
    $url = trim($_GET['url'], '/');
    $recurso = explode('/', $url);
    $metodo = $_SERVER['REQUEST_METHOD'];
    // echo (json_encode(array('codigo'=>'123', 'produto'=>$metodo)));
    rota ($metodo, $recurso);
}else{
    echo (json_encode(array('status'=> 'error', 'data' => 'Digite um recurso')));
}