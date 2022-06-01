<x-page.fullwidth title="Home">
    <x-slot:background>
        <iframe id="bigVideo" type="text/html" title="Trailer bureau onbeperkte zaken" src="{{ config('boz.homepage_video_url') }}" allowfullscreen></iframe>
    </x-slot:background>
    <div class="home-wrapper">
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
        <div class="paragraph">
            <h5>Ons doel</h5>
            <h2>Een revolutie teweeg brengen! Die inzicht in elkaars werelden geeft</h2>
            <p>
                5 jaar horen we verhalen, wensen en verlangens van mensen met een beperking. Ons eerste project "Onbeperkt Anders", zal in een aantal korte heftige films laten zien welke kwaliteiten mensen met een beperking/handicap hebben en hoe zij in onze samenleving een volwaardige plaats kunnen innemen.
            </p>
            <ul>
                <li>Hoe kan ik van alle verhalen in mijn hoofd een boek schrijven zonder te kunnen lezen en schrijven?</li>
                <li>Kan ik trouwen en samenwonen?</li>
                <li>Hoe word ik adviseur?</li>
                <li>Hoe krijg je een volwaardig salaris?</li>
            </ul>
        </div>
        <div class="paragraph">
            <p>
                <q>
                    Ik wil dat mensen met een handicap worden gezien als wie we zijn, talentvolle mensen, dat zijn wij!
                </q>
                <span>Tijmen</span>
            </p>
        </div>
        <div class="paragraph">
            <h2>Wat willen we bereiken</h2>
            <h3>Onderzoeken</h3>
            <p>
                Hoe het VN-verdrag van mensen met een beperking na te leven.

                En bewustwording creëren hoe mensen met een beperking hun talenten kunnen inzetten in de maatschappij.
            </p>
            <h3>Acceptatie</h3>
            <p>
                <q>
                    Als je het probleem accepteert is het al voor een deel opgelost.
                </q>
                <span>Robin, Theaterwerkplaats Novalis</span>
            </p>
            <h3>Co-Creatie</h3>
            <p>
                Iedereen moet met elkaar samenwerken. Op de werkvloer, in de kunst en in het dagelijks leven
            </p>
        </div>
    </div>
    </x-page>