@props([
    'title' => $view_name, 
    'titlebase' => config("app.name"),
    'sidebar' => '',
    'background' => ''
])

<x-page.base title="{{ $title }}" titlebase="{{ $titlebase }}" background="{{ $background }}">
    <main>
        {!! $slot !!}
    </main>
    <aside class="sidebar">
        {!! $sidebar !!}
    </aside>
</x-page.base>