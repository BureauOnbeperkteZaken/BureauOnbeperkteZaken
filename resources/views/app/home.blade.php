<x-page.fullwidth-novid>

    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <div class="home-box">
        <div class="home-banner" style="background-image: url({{asset('img/BOZ_banner.JPG')}});"></div>
    </div>
    <div class="home-setup">
        <div class="home-text-banner">
            <h2 class="text-center">Denk liever in mogelijkheden dan beperkingen</h2>
            <h6 class="text-center" style="color: #525252;">Stichting Bureau Onbeperkte Zaken wil dat mensen met een
                handicap gezien worden zoals ze zijn, talentvolle mensen. Geen gehandicapten</h6>
        </div>
        <div class="home-wrapper">
            <h1 class="text-center">Wie wij zijn</h1>
            <div class="home-item">
                <div class="home-wzw">
                    <img class="home-logo" src="{{asset('img/BOZ_logo.JPG')}}" alt="Logo Bureau Onbeperkte Zaken" />
                    <p>5 jaar horen we verhalen, wensen en verlangens van mensen met een beperking.
                        Ons eerste project "Onbeperkt Anders", zal in een aantal korte heftige films
                        laten zien welke kwaliteiten mensen met een beperking/handicap hebben en hoe
                        zij in onze samenleving een volwaardige plaats kunnen innemen.</p>
                </div>
                <a class="button" href="/overons" style="float: right">Lees meer</a>
            </div>
            <figure class="home-quotebox">
                <blockquote class="blockquote text-center">
                    <p>“Ik wil dat mensen met een handicap worden gezien als wie we zijn, talentvolle mensen, dat zijn
                        wij!”</p>
                </blockquote>
                <figcaption class="blockquote-footer text-center">
                    <cite title="Source Title">Tijmen</cite>
                </figcaption>
            </figure>
            <div>
                <h1 class="text-center">Wat wij doen</h1>
                <div class="home-item">
                    <p class="text-center">Bekijk de trailer!</p>

                    <div class="home-trailer-container">
                        <iframe src="https://player.vimeo.com/video/715744582?h=f481fd74c0&color=61e0b8&title=0&byline=0&portrait=0" width="640" height="360" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
            <div>
                <h1 class="text-center">Wat wij willen bereiken</h1>
                <div class="home-item">
                    <div class="plan-card-layout">
                        <div class="plan-card-box">
                            <div class="plan-card">
                                <h4>Onderzoeken</h4>
                                <p>Hoe het VN-verdrag van mensen met een beperking na te leven.
                                    En bewustwording creëren hoe mensen met een beperking hun talenten kunnen inzetten in de
                                    maatschappij.</p>
                            </div>
                        </div>
                        <div class="plan-card-box">
                            <div class="plan-card">
                                <h4>Acceptatie</h4>
                                <p>"Als je het probleem accepteert is het al voor een deel opgelost."
                                    - Robin, Theaterwerkplaats Novalis</p>
                            </div>
                        </div>
                        <div class="plan-card-box">
                            <div class="plan-card">
                                <h4>Co-Creatie</h4>
                                <p>Iedereen moet met elkaar samenwerken. Op de werkvloer, in de kunst en in het dagelijks
                                    leven</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <a class="button" href="/jarenplan">Lees meer</a>
                    </div>
                </div>
            </div>
            <div>
                <h1 class="text-center">Recente projecten</h1>
                <div class="home-project-gallery">
                    @foreach ($projects as $project)
                    <div class="home-project">
                        <img src="{{ $project->image_path }}" alt="" />
                        <h3>{{ $project->name }}</h3>
                        <p>{{ (strlen($project->description) > 80) ? substr($project->description, 0, 80) . '...' : $project->description; }}</p>
                        <a href="/project/{{ $project->id }}">{{ __('more') }}</a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div>
                <h3 class="text-center">Deze mensen steunen onze doelstelling</h3>
                <div class="flex-home">
                    <div class="flex-inline-home">
                        <div class="photo">
                            <img src="{{ asset('storage/uploads/Gemeente-Vught.png') }}" alt="Afbeelding gemeente Vught">
                        </div>
                    </div>
                    <div class="flex-inline-home">
                        <div class="photo">
                            <img src="{{ asset('storage/uploads/Moved-Media.jpg') }}" alt="Logo Moved Media">
                        </div>
                    </div>
                    <div class="flex-inline-home">
                        <div class="photo">
                            <img src="{{ asset('storage/uploads/ZomaarZichtbaar.jpg') }}" alt="Logo Zomaar Zichtbaar">
                        </div>
                    </div>
                    <div class="flex-inline-home">
                        <div class="photo">
                            <img src="{{ asset('storage/uploads/Scarable.png') }}" alt="Logo Scarable">
                        </div>
                    </div>
                    <div class="flex-inline-home">
                        <div class="photo">
                            <img src="{{ asset('storage/uploads/NoortjeVanLith.jpg') }}" alt="Foto Noortje van Lith">
                        </div>
                    </div>
                    <div class="flex-inline-home">
                        <div class="photo">
                            <img src="{{ asset('storage/uploads/van-kruisdijk.jpg') }}" alt="Logo van Kruisdijk">
                        </div>
                    </div>
                    <div class="flex-inline-home">
                        <div class="photo">
                            <img src="{{ asset('storage/uploads/Kunstloc-brabant.png') }}" alt="Logo Kunstloc Brabant">
                        </div>
                    </div>
                    <div class="flex-inline-home">
                        <div class="photo">
                            <img src="{{ asset('storage/uploads/Nieuwerwets.png') }}" alt="Logo Nieuwerwets">
                        </div>
                    </div>
                    <div class="flex-inline-home">
                        <div class="photo">
                            <img src="{{ asset('storage/uploads/AVE.jpeg') }}" alt="Logo Albert Verlinde">
                        </div>
                    </div>
                    <div class="flex-inline-home">
                        <div class="photo">
                            <img src="{{ asset('storage/uploads/Hans-Kroon.jpg') }}" alt="Logo Hans Kroon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-page.fullwidth-novid>