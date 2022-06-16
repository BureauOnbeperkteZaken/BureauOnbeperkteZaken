<?PHP
$docs_version = explode('.', Illuminate\Foundation\Application::VERSION)[0] . ".x";
?>

<x-page.fullwidth>

    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <h1 style="text-align: center;">Over Ons</h1>
    </head>
    <x-slot name="header">
        <h2>
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <section>
        <h2 class="text-left mt-5">Ideeënmakers</h2>
        <div class="item">
            <!-- TODO foto toevoegen met Jojo en Carine -->
{{--            <img src="" alt="TBD" />--}}
{{--            <h5>Placeholder foto</h5>--}}
        </div>

        <div class="paragraph" style="text-align: left;">
            Wij zijn Carine Hermens (programmamaker/regisseur/docent) en Jojo Heesbeen (regisseur/, klinisch psycholoog
            en filosoof) en vakspecialisten bij theaterwerkplaats Novalis.
            <br><br>
            Wij werken al jaren met mensen met een beperking en vinden het nodig om een revolutie teweeg te brengen
            omdat mensen met een beperking nog altijd worden gediscrimineerd in onze samenleving.
            Bijvoorbeeld vanuit de Wajong werken en geen passend salaris ontvangen voor de administratieve werkzaamheden
            en zodoende
            niet uit de Wajong kunnen komen en bang zijn om de baan kwijt te raken als hij dit aankaart.
            <br>
            Als het om theater maken gaat, er is geen castingbureau of afdeling voor mensen met een handicap.
            Ze kunnen geen carrière opbouwen met de talenten die ze hebben, ze worden een keer gevraagd en daarna is het
            klaar.
            Een biertje drinken kan ook een probleem zijn als je een beperking hebt. Vaak wordt er naar de leeftijd
            gevraagd of ze krijgen het niet.
            Een huis met een tuintje is niet mogelijk voor iemand met een beperking. En ga zo maar door.
            Na jaren van landelijk campagnes en lobby’s worden mensen met een beperking nog altijd genegeerd als het
            gaat om de basisrechten van de mensheid;
            vrijheid van mening en zelfbeschikkingsrecht.
            Dit vinden wij niet alleen, maar ook de mensen met een beperking.
            Het VN verdrag voor mensen met een beperking krijgt geen aandacht. Dat willen wij bekend maken.
        </div>
    </section>

    <br><br>

    <section>
        <h2>Het bestuur</h2>
            <div class="picture-grid">
                <div class="item">
                    <div class="image-container">
                        <img src="{{asset('img/Portret_Jojo.jpg')}}" alt="Foto van Jojo"/>
                    </div>
                    <div class="overons-text">
                        <h5>Jojo</h5>
                        <p style="text-align: left;">
                            Wil de maatschappij laten zien, dat talenten van mensen met een handicap omarmend moet
                            worden en niet ontkend.
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="image-container">
                        <img src="{{asset('img/Portret_Lianne.jpg')}}" alt="Foto van Lianne"/>
                    </div>
                    <div class="overons-text">
                        <h5>Lianne</h5>
                        <p style="text-align: left;">
                            Voelt me uitgedaagd om een steentje bij te dragen aan een wereld waarin iedereen gehoord
                            en gezien wordt, en serieus genomen in de mogelijkheden die er wél zijn.
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="image-container">
                        <img src="{{asset('img/Portret_Tijmen.jpg')}}" alt="Foto van Tijmen"/>
                    </div>
                    <div class="overons-text">
                        <h5>Tijmen</h5>
                        <p style="text-align: left;">
                            Wil dat mensen met een handicap worden gezien als wie we zijn, talentvolle mensen, dat
                            zijn wij! Geen gehandicapten!
                        </p>
                    </div>
                </div>

            <div class="item">
                <div class="image-container">
{{--                    TODO: Foto van Hans krijgen?--}}
{{--                    <img src="{{asset('img/Portret_Hans.jpg')}}" alt="Foto van Hans"/>--}}
                </div>
                <div class="overons-text">
                    <h5>Hans</h5>
                    <p style="text-align: left;">
                        Mijn grote wens is dat onze gehandicapte medemensen optimaal kunnen functioneren in onze
                        samenleving op basis van gelijkwaardigheid en hun kwaliteiten.
                    </p>
                </div>
            </div>
            <div class="item">
                <div class="image-container">
                    <img src="{{asset('img/Portret_Carine.jpg')}}" alt="Foto van Carine"/>
                </div>
                <div class="overons-text">
                    <h5>Carine</h5>
                    <p style="text-align: left;">
                        Wil graag de rest van de wereld laten zien hoe kwaliteiten van mensen met een beperking
                        veel
                        beter ingezet kunnen worden in de maatschappij.
                    </p>
                </div>
            </div>
    </section>
</x-page.fullwidth>
