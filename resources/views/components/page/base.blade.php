@props([
    'title' => '', 
    'titlebase' => config("app.name")
])

<!DOCTYPE html>
<html lang="{{ config('app.locale') ?? config('app.fallback_locale') }}">

<head>
    @include('layouts.meta', [
        'title' => $title, 
        'titlebase' => $titlebase
    ])
</head>

<body>
    <header>
        @include('layouts.menu')
    </header>
    <div class="wrapper">
        {!! $slot !!}
    </div>
    <footer>
        {{ __('main.copyright_notice') }}
    </footer>
</body>

</html>