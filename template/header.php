<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Title</title>

    <link rel="icon" href="/images/logo-light.png" type="image/png" sizes="<16>X<16>">
    <link rel="stylesheet" href="/icons/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css?t=<?php echo(microtime(true) . rand()); ?>">
</head>
<body>
<header class="header">
    <div class="row align-items-center">
        <div class="col-8 col-sm-8 col-md-4 col-lg-2 col-xl-1 order-xs-2">
            <div class="logo">
                <a href="/" class="logo-link"></a>
            </div>
        </div>
        <div class="col-4 col-sm-4 col-md-4 col-lg-6 col-xl-5 order-xs-1">
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
                            //echo $url;
                            global $mysqli;
                            $sql = mysqli_query($mysqli, 'SELECT * FROM `menu`');
                            // $active = '';
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
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-6 order-xs-3">
            <div class="info">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-5">
                        <a href="https://api.whatsapp.com/send?phone=79153301314" class="btn btn-md btn-pink btn-block"
                           target="_blank">
                            <i class="fab fa-whatsapp" aria-hidden="true"></i><span>Написать в WhatsÂpp</span>
                        </a>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                        <a href="viber://chat?number=79153301314" class="btn btn-md btn-pink btn-block"
                           target="_blank">
                            <i class="fab fa-viber"></i><span>Написать в Viber</span>
                        </a>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        <a href="mailto:segasle@ya.ru" class="btn btn-md btn-pink btn-block"
                           target="_blank">
                            <i class="fab fa-mail-bulk"></i><span>Написать на почту</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>