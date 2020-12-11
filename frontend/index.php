<?php


$rota = explode("/", $_GET['url'] ?? 'home');

if (file_exists("{$rota[0]}.php")) {
    include "{$rota[0]}.php";
}
