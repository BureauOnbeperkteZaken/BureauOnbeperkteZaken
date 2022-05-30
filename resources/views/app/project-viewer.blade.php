<style>
    .content {
        gap: 80px;
    }
</style>
<x-page.fullwidth :cards="true" type="project_details" project_id="{{$projectId}}">

    <x-slot:background>
        <iframe id="bigVideo" type="text/html" title="Vimeo player" src="{{ $videoLink }}" allowfullscreen></iframe>
    </x-slot:background>

    <div class="editor">
        <div class="content">
            @foreach ($blocks as $block)
            {!! $block->getContent() !!}
            @endforeach
        </div>
    </div>
    </x-page.sidebar>
