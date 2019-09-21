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
        <div class="col 12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <div class="logo">
                <a href="/" class="logo-link"></a>
            </div>
        </div>
        <div class="col 12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <div class="menu">
               <!-- <input type="checkbox" id="menu">
                <label for="menu" class="label-none">
                    <i class=""></i>
                </label>!-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fas fa-align-justify fa-3x"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Disabled</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="col 12 col-sm-12 col-md-4 col-lg-4 col-xl-4"></div>
    </div>
</header>