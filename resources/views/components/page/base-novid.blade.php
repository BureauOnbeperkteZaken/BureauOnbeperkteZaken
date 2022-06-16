@props([
    'title' => '',
    'titlebase' => config("app.name"),
    'background' => '',
    'type' => '',
    'project_id' => '',
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
    @auth
        @include('layouts.admin', [
            'type' => $type,
            'project_id' => $project_id
        ])
    @endauth
    <div @class(['wrappernovid', 'no-background' => empty($background) ])>
        <header>
            @include('layouts.menu')
        </header>
        {!! $background ? '<div id="background">' . $background . '</div>' : "" !!}
        {!! $slot !!}
    </div>
    <footer>
        {{ __('main.copyright_notice') }}
    </footer>
</body>

</html>
