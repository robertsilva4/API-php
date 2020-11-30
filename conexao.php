<?php

function conn()
{
    $host = "localhost";
    $port = 3306;
    $user = "root";
    $passwd = "";
    $db = "cadastro";

    try{
        $connection = new PDO("mysql:host={$host};port={$port};dbname={$db}", $user, $passwd);
        return $connection;
    } catch (Exception $error){
         echo "ocorreu o seguinte erro {$error->getMessage()}";
    }
}