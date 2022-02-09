<?php

$page['Title'] = "Bureau Onbeperkte Zaken";

?>

<!DOCTYPE html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link async="" rel="preload" href="https://avametix.com/stylesheets/stylesheet.css?ver=0" as="style">
        <link async="" href="https://avametix.com/stylesheets/stylesheet.css?ver=0" rel="stylesheet" type="text/css">
        <title><?=$page['Title']?> - Avametix</title>
    </head>
    <body>
        <header>
            <a href="https://avametix.com" class="image"><img src="https://avametix.com/media/assets/icons/Logo-White.svg" alt="Avametix logo" width="40"></a>
        </header>
        <main>
            <div class="center off">
                <h1><?=$page['Title']?></h1>
                <p>
                    SO-L, 04/02/2022, <a href="https://laravel.com/docs/9.x">Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</a>, <a href="https://github.com/Pixel-Null/BureauOnbeperkteZaken">Github Repository</a><br/>
                    Hosted by <a href="https://avametix.com">Avametix</a>.
                </p>
            </div>
        </main>
        <script src="https://avametix.com/javascript/javascript.js"></script>
    </body>
</html>