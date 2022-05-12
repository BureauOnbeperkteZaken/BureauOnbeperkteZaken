<style>
    .content {
        gap: 80px;
    }
</style>
<x-page.fullwidth :cards="true">

    <x-slot:background>
        <iframe id="bigVideo" type="text/html" title="Vimeo player" src="{{ $videoLink }}" allowfullscreen></iframe>
    </x-slot:background>

    <div class="editor">
        <div class="content">
            @foreach ($blocks as $block)
            {!! $block->content !!}
            <script>
                let block{{$block->order}} = document.querySelectorAll('.paragraph')[{{$block->order - 1}}];
                block{{$block->order}}.innerHTML += "<div class=\"editor-toolbar\"><button><a href=\"{{route('panelblock.edit', $block->id)}}\">{{ __('edit') }}</a></button></div>"
            </script>
            @endforeach
        </div>
        <div class="flex">
            <button><a href="{{route('panelblock.create', ['project' => $block->project_id, 'type' => 'paragraph'])}}">Paragraph</a></button>
            <button><a href="{{route('panelblock.create', ['project' => $block->project_id, 'type' => 'image-paragraph'])}}">Image-paragraph</a></button>
            <button><a href="{{route('panelblock.create', ['project' => $block->project_id, 'type' => 'paragraph-image'])}}">Paragraph-image</a></button>
            <button><a href="{{route('panelblock.create', ['project' => $block->project_id, 'type' => 'gallery'])}}">Gallery</a></button>
        </div>
    </div>
</x-page.sidebar>