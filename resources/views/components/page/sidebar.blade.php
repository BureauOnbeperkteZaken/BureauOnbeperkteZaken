@props([
    'title' => $view_name, 
    'titlebase' => config("app.name"),
    'sidebar' => ''
])

<x-page.base title="{{ $title }}" titlebase="{{ $titlebase }}">
    <main>
        {!! $slot !!}
    </main>
    <aside class="sidebar">
        {!! $sidebar !!}
    </aside>
</x-page.base>