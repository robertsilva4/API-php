<?php

$acao =  $_POST['acao'];


if ($acao == "validemail") {
    $email = $_POST['emailValid'];
    $senha = $_POST['senhaValid'];
    $idrecurso = $_POST['recurso'];

    if ($idrecurso == 1) {
        $recurso = "clientes";
    }else{
        $recurso = "usuarios";
    }


    $url = "http://localhost/trabalhos/API-php/backend/{$recurso}/{$email}";
    $json = json_decode(file_get_contents($url));
    $error = 0;
    $id = "";
    $nomeData = "";

    foreach ($json->data as $data) {
        $senhaSegura = password_verify($senha, $data->senha);
        if ($senhaSegura) {
            $id = $data->id;
            $nomeData = $data->nome;
        } else {
            $error = 1;
        }
    }

    

    header('Content-Type: application/json');
    echo json_encode(array(
        "id" => $id,
        "tipo" => $idrecurso,
        "nome" => $nomeData,
        "error" => $error,
    ));
}
