
<?php
$sql = mysqli('SELECT * FROM `contacts`');
$array = mysqli_fetch_array($sql);
//print_r($array);

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="yandex-verification" content="de0f9966b07d3d59" />
    <meta name="google-site-verification" content="bnlmtmDEKJwJIN9Ls7w0TO7_5QwOhk1JgBzrHPRVSp0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Веб студия - webpro">
    <meta property="og:description" content="ru_RU">
    <meta property="og:site_name" content="Мы - команда профессиональных WEB-разработчиков, создаем новое, улучшаем старое.">
    <meta name="robots" content="index, follow">
    <meta name="keywords"
          content="веб студия Истра, веб студия pro, веб студия, Заказать сайт, фриланс">
    <meta name="description" content="Мы - команда профессиональных WEB-разработчиков, создаем новое, улучшаем старое.">
    <title>Веб студия WEBPRO</title>


    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/icons/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css?t=<?php echo(microtime(true) . rand()); ?>">
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(55707283, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/55707283" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</head>
<body>
<div class="wrapper">
    <header class="header">
        <div class="row align-items-center">
            <div class="col-5 col-sm-6 col-md-2 col-lg-2 col-xl-1 order-xs-2">
                <div class="logo">
                    <a href="/" class="logo-link"></a>
                </div>
            </div>
            <div class="col-7 col-sm-6 col-md-2 col-lg-10 col-xl-6 order-xs-1">
                <div class="menu">
                    <nav class="navbar navbar-expand-lg navbar-light justify-content-flex-end">
                        <input type="checkbox" id="checkbox" class="d-none">
                        <label for="checkbox" class="label-none burger">
                            <span class="fas fa-align-justify fa-3x" id="btnMenu"></span>
                        </label>
                        <div class="collapse navbar-collapse bg-light" id="navbarNav">
                            <ul class="navbar-nav justify-content-space-between w-100">
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
            </div>
            <div class="col-12 col-sm-12 col-md-8 col-lg-12 col-xl-5 order-xs-3">
                <div class="info">
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-5">
                            <a href="https://api.whatsapp.com/send?phone=<?php echo $array['phone']; ?>"
                               class="btn btn-md btn-pink btn-block"
                               target="_blank">
                                <i class="fab fa-whatsapp" aria-hidden="true"></i><span>Написать в WhatsÂpp</span>
                            </a>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                            <a href="viber://chat?number=<?php echo $array['phone']; ?>" class="btn btn-md btn-pink btn-block"
                               target="_blank">
                                <i class="fab fa-viber"></i><span>Написать в Viber</span>
                            </a>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4  col-xl-3">
                            <a href="mailto:<?php echo $array['email']; ?>" class="btn btn-md btn-pink btn-block"
                               target="_blank">
                                <i class="fas fa-envelope"></i><span>Написать на почту</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="content ndra-container bg-images">