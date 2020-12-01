<?php

include_once("./get.php");
include_once("./post.php");
include_once("./put.php");
include_once("./delete.php");

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

function post($recurso)
{
    $dados = json_decode(file_get_contents('php://input'), true);
    if ($dados) {
        $resultado = create($recurso, $dados);
        if ($resultado) {
            echo (json_encode(array('status' => 'sucess', 'data' => $resultado)));
        } else {
            echo (json_encode(array('status' => 'error', 'data' => 'erro ao cadastrar')));
            header('HTTP/1.1 400 BAD REQUEST');
        }
    } else {
        echo (json_encode(array('status' => 'error', 'data' => 'faltam dados para cadastrar')));
        header('HTTP/1.1 422 UNPROCESSABLE ENTITY');
    }
}
function put($recurso, $id = null)
{
    if ($id != null) {
        $dados = json_decode(file_get_contents('php://input'), true);
        if ($dados) {
            $resultado = update($recurso, $id, $dados);
            if ($resultado) {
                echo (json_encode(array('status' => 'success', 'data' => $resultado)));
            } else {
                echo (json_encode(array('status' => 'error', 'data' => 'nenhum registro encontrado')));
                header('HTTP/1.1 404 NOT FOUND');
            }
        } else {
            echo (json_encode(array('status' => 'error', 'data' => 'falta dados para cadastrar')));
            header('HTTP/1.1 422 BAD REQUEST');
        }
    } else {
        echo (json_encode(array('status' => 'error', 'data' => 'o id não pode ser nulo')));
        header('HTTP/1.1 422 BAD REQUEST');
    }
}
function delete($recurso, $id = null)
{
    $resultado = del($recurso, $id);
    if ($resultado && $id != null) {
        echo (json_encode(array('status' => 'sucess', 'data' => $resultado)));
    } else {
        echo (json_encode(array('status' => 'error', 'data' => 'nenhum registro encontrado')));
        header('HTTP/1.1 404 NOT FOUND');
    }
}