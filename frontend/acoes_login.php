<?php

$acao = $_POST['acao'];

switch ($acao) {
    case 'validEmail':
        echo $acao;
        break;
    
    default:
        # code...
        break;
}