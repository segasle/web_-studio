<?php
global $mysqli;
$bd = 'ca57629_kafe';
$password = 'Nexvf1998';
if (empty($mysqli)){
    $mysqli = mysqli_connect('localhost', $bd, $password, $bd);
    mysqli_set_charset($mysqli, 'UTF8');
}
if (mysqli_connect_errno()){
    echo 'ошибка в подключении к БД ('.mysqli_connect_errno().')'.mysqli_connect_error();
}