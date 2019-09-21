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
    if (empty($_GET['page'])){
        $file = 'main';
    }else{
        $file = $_GET['page'];
    }
//    echo '<pre>';
//    print_r($_SERVER);
//    echo '</pre>';

    include 'template/header.php';
    include 'page/' . $file . '.php';
    include 'template/footer.php';
}