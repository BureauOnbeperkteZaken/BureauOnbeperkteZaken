<!DOCTYPE html>
<html lang="{{ config("app.locale") ?? "en" }}">
    <head>
        @include('layouts.meta')
    </head>
    <body {{ View::hasSection('sidebar') ? "" : "fullwidth" }}>
        @yield('content')
        <footer>
            {{ __('main.copyright_notice') }}
        </footer>
    </body>
</html>