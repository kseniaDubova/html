<?php

    $name = htmlspecialchars($_POST["name"]);
    $lname = htmlspecialchars($_POST["lname"]);
    $vk = htmlspecialchars($_POST["vk"]);
    $data = 'name: ' + $name +', lname: ' + $lname + ', vk: '+ $vk
    $fd = fopen("data.txt", 'a+') or die("не удалось создать файл");
    fwrite($fd, $data);
    fclose($fd);
?>