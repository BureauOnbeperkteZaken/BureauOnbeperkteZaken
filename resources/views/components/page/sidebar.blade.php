@props([
    'title' => $view_name, 
    'titlebase' => config("app.name"),
    'sidebar' => '',
    'background' => '',
    'leftSidebar' => false,
])

<x-page.base title="{{ $title }}" titlebase="{{ $titlebase }}" background="{{ $background }}">
    @if($leftSidebar)
        <aside class="sidebar">
            {{ $sidebar }}
        </aside>
    @endif
    <main>
        {!! $slot !!}
    </main>
    @if(!$leftSidebar)
        <aside class="sidebar">
            {{ $sidebar }}
        </aside>
    @endif
</x-page.base>