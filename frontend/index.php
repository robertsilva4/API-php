<?php


$rota = explode("/", $_GET['url'] ?? 'home');

if (file_exists("{$rota[0]}.html")) {
    include "{$rota[0]}.html";
}
