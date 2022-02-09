# Bureau Onbeperkte Zaken
[![CircleCI](https://circleci.com/gh/Pixel-Null/BureauOnbeperkteZaken/tree/main.svg?style=svg)](https://circleci.com/gh/Pixel-Null/BureauOnbeperkteZaken/tree/main)<br/>
Deze repository is voor de website van Bureau Onbeperkte Zaken van Groep L.
Verdere informatie volgt.
## Lokale installatie
Voor het runnen van dit project in de lokale environment zijn een aantal stappen nodig.<br/>
1. Installeer [PHP 8.x](https://www.php.net/downloads.php) en [composer](https://getcomposer.org/)
2. Clone deze repository
3. Open de locatie van de repository op je eigen computer in een terminal
4. Run "composer install" (wanneer je dit al een keer gedaan hebt run je "composer update" en kan je stap 5 en 6 overslaan)
5. Maak een kopie van .env.example en hernoem deze naar .env
6. Run "php artisan key:generate"
7. Run "php serve"