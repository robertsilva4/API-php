<?php

include_once("./conexao.php");

function create($recurso, $dados)
{
    $campos = array_keys($dados);
    
    switch ($recurso) {
        case 'clientes':
            
            if (isset($campos[8])) {
                return $dados = (array('error' => 'error', 'data' => 'contém campos a mais'));;
            } else {
                $valor = array_values($dados);
                $a = 0;
                while ($a < count($campos)) {
                    if ($campos[$a] == 'senha') {
                        $valor[$a] = password_hash($valor[$a], PASSWORD_DEFAULT,['cost'=>12]);
                    }

                    $a++;
                }
                $campos = implode(',', array_keys($dados));
                $valores = trim(str_repeat('?, ', count($dados)), ', ');
                $sql = "INSERT INTO {$recurso} ({$campos}) VALUES ($valores)";
                $resultado = conn()->prepare($sql);
                $resultado->execute($valor);

                return $dados;                
            }
            break;

        case 'usuarios':

            if (isset($campos[8])) {
                return $dados = (array('error' => 'error', 'data' => 'contém campos a mais'));;
            } else {
                $valor = array_values($dados);
                $a = 0;
                while ($a < count($campos)) {
                    if ($campos[$a] == 'senha') {
                        $valor[$a] = password_hash($valor[$a], PASSWORD_DEFAULT,['cost'=>12]);
                    }

                    $a++;
                }
                $campos = implode(',', array_keys($dados));
                $valores = trim(str_repeat('?, ', count($dados)), ', ');
                $sql = "INSERT INTO {$recurso} ({$campos}) VALUES ($valores)";
                $resultado = conn()->prepare($sql);
                $resultado->execute($valor);

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
