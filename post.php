<?php

include_once("./conexao.php");

function create($recurso, $dados)
{

    switch ($recurso) {
        case 'clientes':
            if (isset($campos[8])) {
                return $dados = (array('error' => 'error', 'data' => 'contém campos a mais'));;
            } else {
                $campos = implode(',', array_keys($dados));
                $valores = trim(str_repeat('?, ', count($dados)), ', ');
                $sql = "INSERT INTO {$recurso} ({$campos}) VALUES ($valores)";
                $resultado = conn()->prepare($sql);
                $resultado->execute(array_values($dados));

                return $dados;
            }
            break;

        case 'usuarios':
            if (isset($campos[8])) {
                return $dados = (array('error' => 'error', 'data' => 'contém campos a mais'));;
            } else {
                $campos = implode(',', array_keys($dados));
                $valores = trim(str_repeat('?, ', count($dados)), ', ');
                $sql = "INSERT INTO {$recurso} ({$campos}) VALUES ($valores)";
                $resultado = conn()->prepare($sql);
                $resultado->execute(array_values($dados));

                return $dados;
            }

            break;
        case 'produtos':
            if (isset($campos[4])) {
                return $dados = (array('error' => 'error', 'data' => 'contém campos a mais'));;
            } else {
                $campos = implode(',', array_keys($dados));
                $valores = trim(str_repeat('?, ', count($dados)), ', ');
                $sql = "INSERT INTO {$recurso} ({$campos}) VALUES ($valores)";
                $resultado = conn()->prepare($sql);
                $resultado->execute(array_values($dados));

                return $dados;
            }
            break;

        default:
            # code...
            break;
    }
}
