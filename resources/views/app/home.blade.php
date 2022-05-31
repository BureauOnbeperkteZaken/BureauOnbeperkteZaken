<x-page.fullwidth title="Home">
    <x-slot name="header">

    </x-slot>
    <div class="home-wrapper">
        <div class="home-gallery">
            @foreach ($projects as $project)
            <div class="home-project">
                <h3>$title</h3>
                <p>$description</p>
                <a href="/project/$id">{{ __('more') }}</a>
            </div>
            @endforeach
        </div>
        <h2>Yeet</h2>
        <p>
            Officia ut cillum eu duis culpa qui nulla tempor duis aute voluptate laborum incididunt officia nulla. Magna laborum consectetur in nulla sit culpa consectetur laborum aliqua ipsum esse. Magna dolor ipsum labore eu incididunt laboris qui consectetur est et aliquip. Officia in minim est adipisicing aliqua nostrud cupidatat do. Deserunt ad proident amet in. Amet cupidatat incididunt pariatur enim ipsum. Officia ad fugiat aliquip do nulla proident est.
        </p>
    </div>
    </x-page>