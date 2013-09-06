<?php

$chars = '0123456789ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz';
$length = 20;
$passwordCnt = 50;

for ($j = 0; $j < $passwordCnt; $j++){
    $password = '';
    for ($i = 0; $i < $length; $i++){
        $password .= $chars[mt_rand(0, strlen($chars) - 1)];
    }
    echo $password . "\n";
}