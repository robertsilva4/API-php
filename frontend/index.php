<?php


$rota = explode("/", $_GET['url'] ?? 'home');

if (file_exists("pages/{$rota[0]}.html")) {
    include "pages/{$rota[0]}.html";
}
