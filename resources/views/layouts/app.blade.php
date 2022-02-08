<!DOCTYPE html>
<html lang="nl">
    <head>
        <link rel="stylesheet" type="text/css" href="{{ url('/stylesheets/stylesheet.css') }}" />
        @hasSection('title')
            <title>
                @yield('title') - Bureau Onbeperkte Zaken
            </title>
        @else
            <title>Bureau Onbeperkte Zaken</title>
        @endif
    </head>
    <body>
        <header>
            <a href="#main" class="hidden-until-focus">Doorgaan naar inhoud</a>
            <nav>
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/projecten') }}">Projecten</a>
                <a href="{{ url('/over-ons') }}">Over Ons</a>
                <a href="{{ url('/achtergronden') }}">Achtergronden</a>
                <a href="{{ url('/contact') }}">Contact</a>
            </nav>
        </header>

        <main id="main">
            @yield('content')
        </main>

        @hasSection('sidebar')
        <aside>
            @yield('sidebar')
        </aside>
        @endif

        <footer>
            Copyright ©2022 Stichting BOZ, Bureau Onbeperkte Zaken - Alle rechten voorbehouden
        </footer>
    </body>
</html>