@props([
    'title' => $view_name,
    'titlebase' => config("app.name"),
    'sidebar' => '',
    'background' => '',
    'cards' => false
])

<x-page.base title="{{ $title }}" titlebase="{{ $titlebase }}" background="{{ $background }}">
    <main @class(['cards' => $cards])>
        <div class="content-wrapper">
            {!! $slot !!}
        </div>
    </main>
</x-page.base>
