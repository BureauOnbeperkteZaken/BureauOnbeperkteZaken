@extends('layouts.app', ['title' => 'Voorbeeld'])

@section('sidebar')
    <div class="flex vertical">
        <section>
            <h3>Inhoudsomschrijving</h3>
            <p>
                In de sidebar heb je de vrijheid om van alles neer te zetten, over het algemeen bevat de sidebar snelle links, maar het is niet ongebruikelijk om hier wat extra informatie te geven over het onderwerp van de pagina.
            </p>
        </section>
        <section>
            <h3>Constructie</h3>
            <p>
                Het is belangrijk om - niet alleen in de sidebar maar overal - rekening te houden met het goed gebruik van semantische tags. Naast good practice is dit namelijk ook hoe de styling gedaan is.
            </p>
        </section>
        <section>
            <h3>Optioneel</h3>
            <p>
                Een sidebar is niet op elke pagina nuttig, de keuze is dan ook gemaakt om deze optioneel te maken. Door de section sidebar simpelweg uit het document te laten krijgt het document automatisch een 'fullscreen' layout om de missende sidebar te compenseren.
            </p>
        </section>
    </div>
@endsection

@section('main')
    <h1>De main content</h1>
    <p>
        Dit is de main content, hier wordt alle informatie over de betreffende pagina laten zien.
    </p>
@endsection
