<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <link rel="stylesheet" type="text/css" href="{{ url('/stylesheets/stylesheet.css') }}" />
        @hasSection('title')
            <title>
                @yield('title') - {{ config('app.name') }}
            </title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif
    </head>
    <body {{ View::hasSection('sidebar') ? "" : "fullwidth" }}>
        <header>
            <a href="#main" class="hidden-until-focus">{{ __('accessibility.skip_to_content') }}</a>
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
            {{ __('main.copyright_notice') }}
        </footer>
    </body>
</html>