<?php
function connecting(){
    $file = '';
    if (empty($_SERVER['REQUEST_URI'])){
        $file = 'main';
    }else{
        $file = $_SERVER['REQUEST_URI'];
    }
}