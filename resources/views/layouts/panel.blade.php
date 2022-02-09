<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <link rel="stylesheet" type="text/css" href="{{ url('/stylesheets/panel.css') }}" />
        @hasSection('title')
            <title>
                @yield('title') - {{ __('panel.title') }} | {{ config('app.name') }}
            </title>
        @else
            <title>{{ __('panel.title') }} - {{ config('app.name') }}</title>
        @endif
    </head>
    <body>

        <main id="main">
            @yield('content')
        </main>

        @hasSection('sidebar')
        <aside>
            @yield('sidebar')
        </aside>
        @endif
    </body>
</html>