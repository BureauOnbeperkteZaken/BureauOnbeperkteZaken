@props([
    'title' => $view_name,
    'titlebase' => config("app.name"),
    'sidebar' => '',
    'background' => '',
    'cards' => false,
    'type' => '',
    'project_id' => '',
])

<x-page.base title="{{ $title }}" titlebase="{{ $titlebase }}" background="{{ $background }}" type="{{$type}}" project_id="{{$project_id}}">
    <main @class(['cards' => $cards])>
        <div class="content-wrapper">
            {!! $slot !!}
        </div>
    </main>
</x-page.base>
