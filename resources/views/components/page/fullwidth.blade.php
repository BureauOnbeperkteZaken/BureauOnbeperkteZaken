@props([
    'title' => $view_name,
    'titlebase' => config("app.name"),
    'sidebar' => '',
    'background' => '',
    'cards' => false,
    'type' => '',
])

<x-page.base title="{{ $title }}" titlebase="{{ $titlebase }}" background="{{ $background }}" type="{{$type}}">
    <main @class(['cards' => $cards])>
        <div class="content-wrapper">
            {!! $slot !!}
        </div>
    </main>
</x-page.base>
