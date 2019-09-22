<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Title</title>
    <link rel="stylesheet" href="/icons/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css?t=<?php echo(microtime(true) . rand()); ?>">
</head>
<body>
<header>
    <div class="row align-items-center">
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 order-xs-2">
            <div class="logo">
                <a href="/" class="logo-link"></a>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 order-xs-1">
            <div class="menu">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fas fa-align-justify fa-3x"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav justify-content-space-between w-100">
                          <?php

                          $url = basename($_SERVER['REQUEST_URI']);
                          //echo $url;
                          global $mysqli;
                          $sql = mysqli_query($mysqli,'SELECT * FROM `menu`');
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
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 order-xs-3"></div>
    </div>
</header>