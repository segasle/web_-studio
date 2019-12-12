<?php
/**
 * Created by PhpStorm.
 * User: sergejslepenkov
 * Date: 2019-09-05
 * Time: 13:01
 */

global $title;
global $keywords;
global $description;
$page = basename($_SERVER['REQUEST_URI']);
$res = mysqli("SELECT * FROM `thumbnails`  WHERE link = '{$page}'");
foreach ($res as $item) {
    if ($page == $item['link']) {
        $title = $item['head'];
        $keywords = $item['head'];
        $description = $item['descriptions'];
    }else{

        $title = '';
        $keywords = '';
        $description = 'Мы - команда профессиональных WEB-разработчиков, создаем новое, улучшаем старое.';
    }
}