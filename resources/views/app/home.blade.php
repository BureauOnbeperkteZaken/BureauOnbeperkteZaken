<x-page.fullwidth-novid style="padding-top: 0px;">
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
              integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
              crossorigin="anonymous">
    </head>
    <div class="home-box">
        <div class="home-banner" style="background-image: url({{asset('img/BOZ_banner.JPG')}});"></div>
    </div>
    <div class="home-setup">
        <div class="home-text-banner">
            <h2 class="text-center">Denk liever in mogelijkheden dan beperkingen</h2>
            <h6 class="text-center" style="color: #525252;">Stichting Bureau Onbeperkte Zaken wil dat mensen met een handicap gezien worden zoals ze zijn, talentvolle mensen. Geen gehandicapten</h6>
        </div>
        <div class="home-wrapper">
            <div>
                <h1 class="text-center">Wie wij zijn</h1>
                <div class="home-wzw">
                    <img class="home-logo" src="{{asset('img/BOZ_logo.JPG')}}" alt="Logo Bureau Onbeperkte Zaken"/>
                    <p>5 jaar horen we verhalen, wensen en verlangens van mensen met een beperking.
                        Ons eerste project "Onbeperkt Anders", zal in een aantal korte heftige films
                        laten zien welke kwaliteiten mensen met een beperking/handicap hebben en hoe
                        zij in onze samenleving een volwaardige plaats kunnen innemen.</p>
                </div>
                <a class="button" href="/overons">Lees meer</a>
            </div>
            <div>
                <h1 class="text-center">Wat wij doen</h1>
                <p class="text-center">Bekijk de trailer!</p>

                <div class="home-trailer-container">
                    <iframe src="https://player.vimeo.com/video/715744582?h=f481fd74c0&color=61e0b8&title=0&byline=0&portrait=0"
                            width="740" height="360"
                            allow="autoplay; fullscreen; picture-in-picture"
                            allowfullscreen>
                    </iframe>
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
            <figure>
                <blockquote class="blockquote">
                    <p>“Ik wil dat mensen met een handicap worden gezien als wie we zijn, talentvolle mensen, dat zijn wij!”</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                    <cite title="Source Title">Tijmen</cite>
                </figcaption>
            </figure>
        </div>
    </div>
</x-page.fullwidth-novid>
