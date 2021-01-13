<!DOCTYPE html>
<html lang="ru">
<?php
$sql = mysqli('SELECT * FROM `contacts`');
$array = mysqli_fetch_array($sql);
//print_r($array);
require 'functions/meta.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="yandex-verification" content="de0f9966b07d3d59"/>
    <meta name="google-site-verification" content="bnlmtmDEKJwJIN9Ls7w0TO7_5QwOhk1JgBzrHPRVSp0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Веб студия - webpro">
    <meta property="og:description" content="ru_RU">
    <meta property="og:site_name" content="<?php echo $description; ?>">
    <meta name="robots" content="index, follow">
    <meta name="keywords"
          content="webpro - разработка сайтов <?php echo $keywords; ?>">
    <meta name="description" content="<?php echo $description; ?>">
    <title>Веб студия WEBPRO <?php echo $title; ?></title>
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/icons/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap&subset=cyrillic"
          rel="stylesheet">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="/css/jquery.fsscroll.css" rel="stylesheet">
    <link href="/css/fullpage.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css?t=<?php echo(microtime(true) . rand()); ?>"><!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(55707283, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true,
        ecommerce:"dataLayer"
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/55707283" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<noscript><div><img src="https://mc.yandex.ru/watch/55707283" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</head>
<body>
<div class="wrapper">
    <header class="header" >
        <div class="container">

            <div class="d-flex flex-wrap align-items-center justify-content-xl-between relative">
                <div class="logo mr-auto mr-md-0">
                    <a href="/" class="logo-link">
                        <object data="/images/icons/Pages.svg" class="w-100"></object>
                    </a>
                </div>

                <div class="menu">
                    <nav class="navbar navbar-expand-md navbar-light justify-content-flex-end">
                        <input type="checkbox" id="checkbox" class="d-none">
                        <label for="checkbox" class="label-none burger">
                            <span class="fas fa-align-justify fa-3x" id="btnMenu"></span>
                        </label>
                        <div class="collapse navbar-collapse bg-light" id="navbarNav">
                            <ul class="navbar-nav justify-content-md-between w-100 flex-wrap">
                                <?php

                                $url = basename($_SERVER['REQUEST_URI']);
                                $sql = mysqli('SELECT * FROM `menu`');
                                foreach ($sql as $r) {
                                    if ($r['link'] === $url) {
                                        $active = 'active';
                                    } else {
                                        $active = '';
                                    }
                                    echo "<li class='nav-item " . $active . "'><a href='" . $r['link'] . "' class='nav-link'>" . $r['title'] . "</a></li>";
                                }
                                ?>
                            </ul>
                        </div>
                    </nav>
                </div>

                <div class="info d-none d-lg-block">
                    <ul class="d-flex">
                        <li class="item">
                            <a href="https://api.whatsapp.com/send?phone=<?php echo $array['phone']; ?>"
                               target="_blank">
                                <object data="/images/icons/whatsapp.svg" width="32" height="32"></object>
                            </a>
                        </li>
                        <li class="item">
                            <a href="viber://chat?number=<?php echo $array['phone']; ?>" class=""
                               target="_blank">
                                <object data="/images/icons/viber.svg" width="32" height="32"></object>
                            </a>
                        </li>
                        <li class="item">
                            <a href="mailto:<?php echo $array['email']; ?>" class=""
                               target="_blank">
                                <?php echo $array['email']; ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-bottom"></div>

            <div class="d-flex flex-wrap relative">
                <div class="tagline">

                    <h1>У нас нет преград</h1>
                    <div class="block_text">
                        <p class="text">Мы - команда профессиональных WEB-разработчиков, создаем новое, улучшаем
                            старое.</p>
                        <?php
                        $main = 'main';
                        $services = 'services';
                        $page = $_GET['page'];
                        if ($page === $main or empty($page) or $page == $services) { ?>
                            <a href="#request" class="btn btn-purple btn-lg">Оставить заявку
                            </a>
                        <?php } else {
                            ?>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-purple btn-lg" data-toggle="modal" data-target="#exampleModal">
                                Оставить заявку
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog container">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <?php include 'template/form.php'; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
                <div class="tagline-img">
                    <img src="/images/header.png" alt="" class="bg-header-img">
                </div>
            </div>
        </div>

    </header>
<!--    <div class="feedback">-->
<!--        <button class="btn btn-light-pink btn-email" type="button"><i class="far fa-envelope fa-2x d-md-none"></i><span-->
<!--                    class="btn-text d-none d-md-block">Отправьте нам собщение</span></button>-->
<!--    </div>-->
    <main class="content ndra-container" id="fullpage">