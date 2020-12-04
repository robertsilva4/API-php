<?php

function update($recurso, $id, $dados)
{
    $campos = array_keys($dados);
    $valores = array_values($dados);
    $cont = count($dados);

    switch ($recurso) {
        case 'clientes':
            if (isset($campos[8])) {
                return $dados = (array('error' => 'error', 'data' => 'contém campos desnecessários'));;
            } else {
                $a = 0;
                $b = 0;
                $sqlarray = '';
                $sql = "UPDATE $recurso SET ";
                while ($a < $cont) {
                    $sqlarray .= "$campos[$a] = :$campos[$a], ";
                    $a++;
                }
                $sql2 = trim($sqlarray, ', ');
                $sql .= "$sql2 WHERE id = $id";

                $resultado = conn()->prepare($sql);
                while ($b < $cont) {
                    if ($campos[$b] == 'senha') {
                        $valores[$b] = password_hash($valores[$b],PASSWORD_DEFAULT,['cost'=>12]);
                    }
                    $resultado->bindValue(":{$campos[$b]}", $valores[$b]);
                    $b++;
                }
                $resultado->execute();

                return $dados;
            }
            break;

        case 'usuarios':
            
            if (isset($campos[8])) {
                return $dados = (array('error' => 'error', 'data' => 'contém campos desnecessarios'));;
            } else {
                $a = 0;
                $b = 0;
                $sqlarray = '';
                $sql = "UPDATE $recurso SET ";
                while ($a < $cont) {
                    $sqlarray .= "$campos[$a] = :$campos[$a], ";
                    $a++;
                }
                $sql2 = trim($sqlarray, ', ');
                $sql .= "$sql2 WHERE id = $id";

                $resultado = conn()->prepare($sql);
                while ($b < $cont) {
                    if ($campos[$b] == 'senha') {
                        $valores[$b] = password_hash($valores[$b],PASSWORD_DEFAULT,['cost'=>12]);
                    }
                    $resultado->bindValue(":{$campos[$b]}", $valores[$b]);
                    $b++;
                }
                $resultado->execute();

                return $dados;
            }
            break;
        
        case 'produtos':
            if (isset($campos[4])) {
                return $dados = (array('error' => 'error', 'data' => 'contém campos desnecessarios'));;
            } else {
                $a = 0;
                $b = 0;
                $sqlarray = '';
                $sql = "UPDATE $recurso SET ";
                while ($a < $cont) {
                    $sqlarray .= "$campos[$a] = :$campos[$a], ";
                    $a++;
                }
                $sql2 = trim($sqlarray, ', ');
                $sql .= "$sql2 WHERE id = $id";

                $resultado = conn()->prepare($sql);
                while ($b < $cont) {
                    $resultado->bindValue(":{$campos[$b]}", $valores[$b]);
                    $b++;
                }
                $resultado->execute();

                return $dados;
            }
            break;

        default:
            echo "...";
            break;
    }
}
