<?php
error_reporting(0);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);

function connecting(){
    $file = '';
    if (empty($_SERVER['REQUEST_URI'])){
        $file = 'main';
    }else{
        $file = $_SERVER['REQUEST_URI'];
    }
    include 'template/header.php';
    include 'page/' . $file . '.php';
    include 'template/footer.php';
}