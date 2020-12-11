<?php

$avatar = $_POST['uploadimg'];
echo $avatar;

// if ($avatar['name'] != '') {
    // $nameImage = md5($avatar['name'] . rand(0, 9999));
    // $type = substr($avatar['name'], -4);
    // $completeName = "{$nameImage}{$type}";

    // $image = $avatar['tmp_name'];
    // $nameProd = $_POST['produto'];

    // move_uploaded_file($image, "../img/{$completeName}");

// }